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
use Connection\UserBundle\Entity\Profile;
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
        return $this->render('ConnectionWebBundle:Frontend\Popups:jcrop_form.html.twig', array(
            'form' => $form->createView(),
            'galleries' => $galleries
        ));
    }
}
