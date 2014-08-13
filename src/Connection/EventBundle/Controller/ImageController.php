<?php

namespace Connection\EventBundle\Controller;

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
 * @Route("/event/image")
 */
class ImageController extends Controller
{
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
        return $this->render('ConnectionEventBundle:Popup:jcrop_form.html.twig', array(
            'form' => $form->createView(),
            'galleries' => $galleries
        ));
    }
}
