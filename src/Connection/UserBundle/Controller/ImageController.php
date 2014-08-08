<?php

namespace Connection\UserBundle\Controller;

use Connection\WebBundle\Form\Type\JcropType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Connection\UserBundle\Entity\Profile\Image;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


/**
 * @Route("/image")
 */
class ImageController extends Controller
{

    /**
     * @Route("/profile", name="profile_image")
     */
    public function viewAction( Request $request )
    {
        if ( !$user = $this->getUser() ) {
            throw new AccessDeniedException("Not Logged IN");
        }

        $profileImages = $this->getDoctrine()->getRepository('ConnectionUserBundle:Profile\Image')->getGroupedByGalleryImages($user->getId());
        return new JsonResponse($profileImages);
    }

    /**
     * @Route("/jcrop/from", name="jcrop_form")
     */
    public function jcropFormAction( Request $request )
    {
        if ( !$user = $this->getUser() ) {
            throw new AccessDeniedException("Not Logged IN");
        }

        $galleries = $user->getGalleries();
        $form      = $this->createForm( new JcropType());
        return $this->render('ConnectionUserBundle:Image\Popup:jcrop_form.html.twig', array(
            'form' => $form->createView(),
            'galleries' => $galleries
        ));
    }

    /**
     * @Route("/{id}", name="remove_profile_image", requirements={"id" = "\d+"})
     * @ParamConverter("Image", class="ConnectionUserBundle:Profile\Image")
     */
    public function removeAction( Image $image)
    {
        if (!$user = $this->getUser()) {
            throw new AccessDeniedException();
        }

        if ($image->getGallery()->getUser()->getId() != $user->getId()) {
            throw new AccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($image);
        $em->flush();

        return $this->redirect( $this->generateUrl('edit_user_profile') );
    }

    /**
     * @Route("/profile/update-image", name="update_profile_image", requirements={"id" = "\d+"})
     */
    public function updateProfileImageAction( Request $request)
    {
        if ( (!$user = $this->getUser()) || (!$id = $request->get('image_id')) ) {
            throw new AccessDeniedException();
        }

        $em    = $this->getDoctrine()->getManager();
        $image = $em->getRepository('ConnectionUserBundle:Profile\Image')->find($id);

        if ( $image ) {
            try {
                if ($image->getGallery()->getUser()->getId() == $user->getId()) {
                    $user->getProfile()->setAvatar($image->getPath());
                    $em->persist($user);
                    $em->flush();
                }
            } catch (\Exception $e) {}
        }

        return new JsonResponse();
    }
}
