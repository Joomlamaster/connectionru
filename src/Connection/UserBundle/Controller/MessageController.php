<?php

namespace Connection\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Connection\UserBundle\Entity\User;


class MessageController extends Controller
{
    /**
     * @Route("/message/hi/{id}", name="user_message_hi", requirements={"id" = "\d+"})
     * @ParamConverter("User", class="ConnectionUserBundle:User")
     */
    public function removeFavoriteUserAction(User $recipient) {
        /* @var $user \Connection\UserBundle\Entity\User */
        $sender = $this->getUser();

        if ($sender->getId() == $recipient->getId()) {
            throw new \Exception('You cannot send message to yourself');
        }

        $threadBuilder  = $this->get('fos_message.composer')->newThread();
        $threadBuilder
            ->addRecipient($recipient) // Retrieved from your backend, your user manager or ...
            ->setSender($sender)
            ->setSubject('Hi')
            ->setBody('Hi!');

        $senderService = $this->get('fos_message.sender');
        $senderService->send($threadBuilder->getMessage());

        return new Response();
    }
}
