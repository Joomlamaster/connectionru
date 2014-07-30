<?php

namespace Connection\UserBundle\Service;

use Symfony\Component\DependencyInjection\Container;
use Connection\UserBundle\Library\Twitter\Oauth\TwitterOAuth;

class TwitterSdkService implements SocialServiceInterface {
    private $container;
    private $key;
    private $secret;
    private $profile;
    private $errors = array();

    public function __construct( Container $container, $key, $secret )
    {
        $this->container    = $container;
        $this->secret       = $secret;
        $this->key          = $key;
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

    /**
     * @param array $errors
     */
    private function addError ( $error )
    {
        $this->errors[] = $error;
    }

    /**
     * @return array
     */
    public function getErrors ()
    {
        return $this->errors;
    }

    public function getLoginButton()
    {
        $connection     = new TwitterOAuth($this->key, $this->secret);
        $tmpCredentials = $connection->getRequestToken($this->container->get('router')->generate('twitter_login', array(), true));

        $this->container->get('session')->set('twitter_temporary_credentials', $tmpCredentials);
        return $connection->getAuthorizeURL($tmpCredentials);
    }

    public function prepareProfile()
    {
        $tmpCredentials = $this->container->get('session')->get('twitter_temporary_credentials');

        if ( empty($tmpCredentials) ) {
            $this->addError('TMP Credentials not found or not valid');
        }

        $credentials      = $this->container->get('request')->query->all();
        $connection       = new TwitterOAuth($this->key, $this->secret, $tmpCredentials['oauth_token'], $tmpCredentials['oauth_token_secret']);
        $tokenCredentials = $connection->getAccessToken($credentials['oauth_verifier']);

        $connection       = new TwitterOAuth($this->key, $this->secret, $tokenCredentials['oauth_token'], $tokenCredentials['oauth_token_secret']);
        $profile          = $connection->get('account/verify_credentials');

        $this->setProfile($profile);
        return $this;
    }

    public function normalize($profile)
    {

        $normalizedProfile = array(
            'id'       => $profile->id,
            'username' => $profile->screen_name
        );

        return $normalizedProfile;
    }

    public function getName()
    {
        return "twitterId";
    }
}