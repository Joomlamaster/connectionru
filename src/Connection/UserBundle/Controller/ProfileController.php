<?php

namespace Connection\UserBundle\Controller;

use Connection\UserBundle\Form\Type\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Connection\UserBundle\Entity\Profile;


/**
 * @Route("/profile")
 */
class ProfileController extends Controller
{
    /**
     * @Route("/{id}", name="user_profile")
     * @Template()
     * @ParamConverter("Profile", class="ConnectionUserBundle:Profile")
     */
    public function indexAction(Profile $profile)
    {
        $formFactory = $this->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        $form->setData($profile->getUser());
        return array(
            'form' => $form->createView()
        );
    }
}
