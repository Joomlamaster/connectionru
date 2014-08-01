<?php

namespace Connection\UserBundle\Service;

use Connection\UserBundle\Entity\User;
use Connection\UserBundle\Entity\Profile;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use Symfony\Component\DependencyInjection\Container;

class FacebookSdkService implements SocialServiceInterface {
    private $dbFieldName = "facebookId";
    private $container;
    private $appId;
    private $secret;
    private $session;
    private $profile;
    private $errors = array();

    public function __construct( Container $container, $appId, $secret )
    {
        $this->container    = $container;
        $this->appId        = $appId;
        $this->secret       = $secret;

        if ( empty($_SESSION) ) {
            $_SESSION = $this->container->get('session')->all();
        }

        FacebookSession::setDefaultApplication($this->appId, $this->secret);
    }

    /**
     * @param mixed $session
     */
    private function setSession ( $session )
    {
        $this->session = $session;
    }

    /**
     * @return mixed
     */
    public function getSession ()
    {
        return $this->session;
    }

    /**
     * @param mixed $errors
     */
    private function addError ( $error )
    {
        $this->errors[] = $error;
    }

    /**
     * @return mixed
     */
    public function getErrors ()
    {
        return $this->errors;
    }

    /**
     * @param mixed $profile
     */
    private function setProfile ( $profile )
    {
        $this->profile = $this->normalize($profile);
    }

    /**
     * @return mixed
     */
    public function getProfile ()
    {
        return $this->profile;
    }

    public function getLoginButton()
    {
        return  new FacebookRedirectLoginHelper($this->container->get('router')->generate('facebook_login', array(), true));
    }

    public function prepareSession()
    {
        $facebook   = new FacebookRedirectLoginHelper($this->container->get('router')->generate('facebook_login', array(), true));
        try {
            $session = $facebook->getSessionFromRedirect();
            $this->setSession($session);
        } catch(FacebookRequestException $ex) {
            $this->addError($ex->getMessage());
        } catch(\Exception $ex) {
            $this->addError($ex->getMessage());
        }
        return $this;
    }

    public function prepareProfile( $session = null )
    {
        $session = empty($session) ? $this->getSession() : $session;

        if ( empty($session) ) {
            throw new \Exception('Empty Session, please provide a valid session');
        }

        $request    = new FacebookRequest($session, 'GET', '/me');
        $response   = $request->execute();
        $this->setProfile($response->getGraphObject()->asArray());
        return $this;
    }

    public function getProfileParam( $key )
    {
        if ( empty($this->profile) ) {
            throw new \Exception('Profile Is Empty, make sure to request Facebook profile first');
        }
        return $this->profile[$key];
    }

    public function normalize($profile)
    {
        $requiredFields = array( 'id', 'birthday', 'email', 'first_name', 'last_name');
        foreach ($requiredFields as $key => $fieldName) {
            if ( empty($profile[$fieldName]) ) {
                $profile[$fieldName] = "";
            }
        }

        return $profile;
    }

    public function getName()
    {
        return $this->dbFieldName;
    }
}