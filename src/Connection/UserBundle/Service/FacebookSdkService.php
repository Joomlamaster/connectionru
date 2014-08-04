<?php

namespace Connection\UserBundle\Service;

use Connection\UserBundle\Entity\User;
use Connection\UserBundle\Entity\Profile;
use Connection\UserBundle\Library\Facebook\Facebook;
use Connection\UserBundle\Library\Facebook\FacebookApiException;
use Symfony\Component\DependencyInjection\Container;

class FacebookSdkService implements SocialServiceInterface {
    private $dbFieldName = "facebookId";
    private $container;
    private $appId;
    private $secret;
    private $profile;
    private $errors = array();
    private $facebook;

    public function __construct( Container $container, $appId, $secret )
    {
        $this->container    = $container;
        $this->appId        = $appId;
        $this->secret       = $secret;

        if ( empty($_SESSION) ) {
            $_SESSION = $this->container->get('session')->all();
        }

        $this->facebook = new Facebook(array(
            'appId'  => $this->appId,
            'secret' => $this->secret,
        ));
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
        $this->facebook->setLoginRedirectUrl($this->container->get('router')->generate('facebook_login', array(), true));
        return  $this->facebook->getLoginUrl();
    }

    public function prepareProfile()
    {
        if ($this->facebook->getUser()) {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $this->setProfile($this->facebook->api('/me'));
            } catch (FacebookApiException $e) {}
        }

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