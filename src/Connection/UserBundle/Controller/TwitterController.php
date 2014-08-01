<?php

namespace Connection\UserBundle\Controller;

use Connection\UserBundle\Form\Type\TwitterEmailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



/**
 * @Route("/twitter")
 */
class TwitterController extends Controller
{
    public function twitterLoginButtonAction()
    {
        $twitterUrl = $this->get('connection_user.twitter')->getLoginButton();
        return $this->render('ConnectionUserBundle:Twitter:login_button.html.twig', array(
            'twitterUrl' => $twitterUrl
        ));
    }

    /**
     * @Route("/login", name="twitter_login")
     * @Template()
     */
    public function twitterLoginAction( Request $request  )
    {
        $twitterService     = $this->get('connection_user.twitter');
        $profile            = $twitterService->prepareProfile()->getProfile();
        $socialUserService  = $this->get('connection_user.social.user');

        if ( !$user = $socialUserService->getTwitterUser( $profile['id'] ) ) {
            $request->getSession()->set('twitter_new_account', $profile);
            return $this->redirect( $this->generateUrl('twitter_add_email') );

        }

        $socialUserService->loginUser($user);
        return $this->redirect( $this->generateUrl('connection_homepage') );

    }

    /**
     * @Route("/add-email", name="twitter_add_email")
     * @Template()
     */
    public function addEmailAction( Request $request )
    {
        $session            = $request->getSession();
        $twitterProfile     = $session->get('twitter_new_account');
        $twitterService     = $this->get('connection_user.twitter');
        $socialUserService  = $this->get('connection_user.social.user');

        if ( empty($twitterProfile) || empty($twitterProfile['id']) ) {
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }

        $form = $this->createForm( new TwitterEmailType() );
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            $email = $form->get('email')->getData();
            if ( $userDuplicate = $socialUserService->findUserByEmail($email) ) {
                $session->set('link_account', array(
                        'type' => $twitterService->getName(),
                        'email' => $email,
                        'profile' => $twitterProfile
                    )
                );
                return $this->redirect( $this->generateUrl('link_profile') );
            }

            $twitterProfile['email'] = $email;
            $user                    = $socialUserService->createNewUser($twitterProfile, $twitterService->getName());
            $socialUserService->sendEmail($user->getEmail());
            $socialUserService->loginUser($user);
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }

        return $this->render('ConnectionUserBundle:Twitter:add_email.html.twig', array(
            'form' => $form->createView()
        ));
    }
}