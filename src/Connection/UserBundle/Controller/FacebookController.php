<?php

namespace Connection\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



/**
 * @Route("/facebook")
 */
class FacebookController extends Controller
{
    public function facebookLoginButtonAction()
    {
        $facebook = $this->get('connection_user.facebook')->getLoginButton();
        return $this->render('ConnectionUserBundle:Facebook:login_button.html.twig', array(
            'facebook' => $facebook
        ));
    }

    /**
     * @Route("/login", name="facebook_login")
     * @Template()
     */
    public function facebookLoginAction( Request $request  )
    {
        //  Init facebook SDK, and USER helper
        $session             = $request->getSession();
        $faceBookSdkService  = $this->get('connection_user.facebook');
        $socialUserService   = $this->get('connection_user.social.user');
        //  Get Session From Facebook Redirect
        $faceBookprofile     = $faceBookSdkService->prepareProfile()->getProfile();

        if ( $faceBookprofile ) {
            //  Check If We already have such user (by email address)
            if ( !$user = $socialUserService->getFbUser( $faceBookprofile['id'] ) ) {
                if ( $userDuplicate = $socialUserService->findUserByEmail($faceBookprofile['email']) ) {
                    $session->set('link_account', array(
                        'type' => $faceBookSdkService->getName(),
                        'email' => $userDuplicate->getEmail(),
                        'profile' => $faceBookprofile)
                    );
                    return $this->redirect( $this->generateUrl('link_profile') );
                }
                //  If not create new User And User Profile
                $user = $socialUserService->createNewUser($faceBookprofile, $faceBookSdkService->getName());
                //  ToDo: Send Email (autogenerated user) with new user info (Email, Password)
                $socialUserService->sendEmail($user->getEmail());
            }

            $socialUserService->loginUser($user);
        }

        return $this->redirect( $this->generateUrl('connection_homepage') );
    }
}