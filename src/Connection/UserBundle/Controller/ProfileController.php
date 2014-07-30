<?php

namespace Connection\UserBundle\Controller;

use Connection\UserBundle\Form\Type\LinkAccountType;
use Connection\UserBundle\Form\Type\RegistrationType;
use Symfony\Component\Form\FormError;
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
     * @Route("/{id}", name="user_profile", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Profile", class="ConnectionUserBundle:Profile")
     */
    public function indexAction(Profile $profile)
    {
        $formFactory = $this->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        $form->setData($profile->getUser());
        return array(
            'form'      => $form->createView(),
            'profile'   => $profile
        );
    }


    /**
     * @Route("/link-profile", name="link_profile")
     * @Template()
     */
    public function linkProfileAction( Request $request )
    {
        $session           = $request->getSession();
        $linkInfo          = $session->get('link_account');
        $em                = $this->getDoctrine()->getManager();
        $socialUserService = $this->get('connection_user.social.user');

        if ( empty($linkInfo) || empty($linkInfo['email']) || empty($linkInfo['profile']) ) {
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }

        $user = $em->getRepository('ConnectionUserBundle:User')->findOneBy(array( 'email' => $linkInfo['email'] ));

        if (!$user) {
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }

        $form = $this->createForm( new LinkAccountType() );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            $encodedPassword = $socialUserService->generatePassword($password, $user);

            if ( $user->getPassword() == $encodedPassword ) {
                $user->getProfile()->setSocialId($linkInfo['type'], $linkInfo['profile']['id']);
                $em->persist($user);
                $em->flush();

                $socialUserService->loginUser($user);
                $session->remove('link_account');
                return $this->redirect( $this->generateUrl('connection_homepage') );
            }

            $form->get('password')->addError(new FormError('Invalid Password'));
        }

        return $this->render('ConnectionUserBundle:Profile:link_profile.html.twig', array(
            'user' => $user,
            'form' => $form->createView()
        ));
    }
}
