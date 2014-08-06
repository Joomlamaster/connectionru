<?php

namespace Connection\UserBundle\EventListener;

use Connection\UserBundle\Entity\Profile\Image;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Connection\UserBundle\Library\SimpleImage\SimpleImage;

class FileUploadListener
{
    private $container;

    public function __construct( Container $container )
    {
        $this->container = $container;
    }

    public function onUpload(PostPersistEvent $event)
    {
        $em         = $this->container->get('doctrine')->getManager();
        $user       = $this->container->get('security.context')->getToken()->getUser();
        $file       = $event->getFile();
        $request    = $event->getRequest();
        $response   = $event->getResponse();
        $galleryId  = $request->get('gallery');
        $config     = $event->getConfig();

        if ( empty($config['storage']['directory']) ) {
            throw new \Exception('One Uploader Storage directory should be configured');
        }

        if ( !$user ) {
            throw new AccessDeniedException('Not Logged In');
        }

        $gallery = $em->getRepository('ConnectionUserBundle:Profile\Gallery')
                      ->getGalleryByIdOrDefault( $user->getId(), $galleryId );

        if ( !$file instanceof File || !$gallery ) {
            throw new AccessDeniedException('No Gallery found');
        }

        $cropResult = $this->cropImage($file, $request->request);

        if (!$cropResult) {
            throw new \Exception('Fail on cropping image');
        }

        $fileDir = str_replace($this->container->get('kernel')->getRootDir() . '/../web', "", $config['storage']['directory']);
        $image   = new Image();
        $image->setName($file->getFilename());
        $image->setGallery($gallery);
        $image->setPath($fileDir. "/" . $user->getId() . "/" . $file->getFilename());

        if ($request->get('profile_default_image')) {
            $user->getProfile()->setAvatar($image->getPath());
            $em->persist($user);
        }

        $em->persist($image);
        $em->flush();

        if ( file_exists($image->getUploadRootDir()) ) {
            $response['id']   = $image->getId();
            $response['name'] = $image->getPath();
            $response['size'] = filesize($image->getUploadRootDir());
        }
    }

    private function cropImage($file, $options)
    {

        $coordinates = $options->get('jcrop');

        if ( empty($coordinates) ) {
            throw new \Exception("Coordinates not found");
        }

        try {
            $simpleImage = new SimpleImage($file->getPath(). "/" . $file->getFileName());
            $simpleImage->crop($coordinates['x'], $coordinates['y'], $coordinates['x2'], $coordinates['y2']);
            $simpleImage->save();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}