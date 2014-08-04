<?php

namespace Connection\UserBundle\Service;

use Oneup\UploaderBundle\Uploader\File\FileInterface;
use Oneup\UploaderBundle\Uploader\Naming\NamerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PropertyImageNamer implements NamerInterface
{

    private $container;

    public function __construct(Container $container) {
        $this->container = $container;
    }
    public function name(FileInterface $file)
    {
        $request    = $this->container->get('request');
        $user       = $this->container->get('security.context')->getToken()->getUser();

        if (!$user) {
            throw new AccessDeniedException('Not Logged In');
        }
        return  sprintf('%s.%s', $user->getId() ."/". uniqid(), $file->getExtension());
    }
}