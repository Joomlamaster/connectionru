<?php

namespace Connection\EventBundle\Twig;

use Connection\EventBundle\Entity\Event;
use Symfony\Component\Security\Core\SecurityContext;

class CommonExtension extends \Twig_Extension
{
	/** @var SecurityContext  */
	private $security;

	public function __construct(SecurityContext $security)
	{
		$this->security = $security;
	}

    public function getTests()
    {
        return array(
            new \Twig_SimpleTest('ownedByCurrentUser', function(Event $event) {
				if ( !$token = $this->security->getToken() ) {
					return false;
				}

	            $user = $token->getUser();
	            return $event->getUser() == $user;
            })
        );
    }

    public function getName()
    {
        return 'common_extension';
    }
}