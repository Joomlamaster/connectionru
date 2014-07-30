<?php

namespace Connection\UserBundle\Service;

use Connection\UserBundle\Entity\User;
use Connection\UserBundle\Entity\Profile;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\DependencyInjection\Container;

class SocialUserService {
    private $container;

    public function __construct(Container $container )
    {
        $this->container    = $container;
    }

    public function getFbUser($facebookId)
    {
        return $this->container->get('doctrine')->getRepository('ConnectionUserBundle:User')->findByFbId($facebookId);
    }

    public function getTwitterUser($twitterId)
    {
        return $this->container->get('doctrine')->getRepository('ConnectionUserBundle:User')->findByTwitterId($twitterId);
    }

    public function findUserByEmail($email)
    {
        return $this->container->get('doctrine')->getRepository('ConnectionUserBundle:User')->findOneBy(array('email' => $email));
    }

    public function createNewUser($socialProfile, $type)
    {
        $em              = $this->container->get('doctrine')->getManager();
        $user            = new User();
        $profile         = new Profile();
        $tokenGenerator  = $this->container->get('fos_user.util.token_generator');
        $password        = $this->generatePassword(substr($tokenGenerator->generateToken(), 0, 12), $user);

        $profile->setSocialId($type,$socialProfile['id']);
        $user->setEnabled(true);

        if ( !empty($socialProfile['birthday']) ) {
            $profile->setBirthdate(new \DateTime($socialProfile['birthday']));
        }

        if ( !empty($socialProfile['first_name']) ) {
            $user->setFirstName($socialProfile['first_name']);
        }
        if ( !empty($socialProfile['last_name']) ) {
            $user->setLastName($socialProfile['last_name']);
        }
        if ( !empty($socialProfile['username']) ) {
            $user->setUsername($socialProfile['username']);
        }
        if ( !empty($socialProfile['email']) ) {
            $user->setEmail($socialProfile['email']);
        }

        $user->setPassword($password);
        $user->setProfile($profile);
        $em->persist($user);
        $em->flush();

        return $user;
    }

    public function generatePassword($password, User $user) {
        $encoder_service = $this->container->get('security.encoder_factory');
        $encoder         = $encoder_service->getEncoder($user);
        return $encoder->encodePassword($password, $user->getSalt());
    }

    public function loginUser($user) {
        $token      = new UsernamePasswordToken($user, null, "main", $user->getRoles());
        $this->container->get("security.context")->setToken($token);
        $request    = $this->container->get("request");
        $event      = new InteractiveLoginEvent($request, $token);
        $this->container->get("event_dispatcher")->dispatch("security.interactive_login", $event);
    }

    public function sendEmail() {

    }
}