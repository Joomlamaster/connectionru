<?php
namespace Connection\MessageBundle\EventListener;

use Swift_Mailer;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use FOS\MessageBundle\Event\MessageEvent;
use FOS\MessageBundle\Event\FOSMessageEvents as Event;
use FOS\MessageBundle\ModelManager\MessageManagerInterface;
use Symfony\Component\Templating\EngineInterface;

class Message implements EventSubscriberInterface
{
    private $messageManager;

    private $mailer;

    private $params;

    private $templating;

    private $user;

    /**
     * @param MessageManagerInterface $messageManager
     * @param Swift_Mailer $mailer
     * @param $params
     */
    public function __construct(MessageManagerInterface $messageManager, Swift_Mailer $mailer, $params, EngineInterface $templating, $user)
    {
        $this->mailer = $mailer;
        $this->params = $params;
        $this->messageManager = $messageManager;
        $this->templating = $templating;
        $this->user = $user;

    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            Event::POST_SEND => 'sendEmailNotification'
        );
    }

    /**
     * @param MessageEvent $event
     */
    public function sendEmailNotification(MessageEvent $event)
    {
        $ms = $event->getMessage();
        $thread = $ms->getThread();
        $subject = $thread->getSubject();
        $subject = "You received new email ( $subject )";
        $participants = $ms->getThread()->getParticipants();

        foreach ($participants as $p) {
            if ($this->user->getEmail() == $p->getEmail()) {
                //not send notification user-self
                continue;
            }
            $message = $this->mailer->createMessage()
                ->setSubject($subject)
                ->setFrom(key($this->params), current($this->params))
                ->setTo($p->getEmail())
                ->setBody(
                    $this->templating->render(
                        'ConnectionMessageBundle:Email:message_new.html.twig',
                        array(
                            'message' => $ms,
                            'user' => $p,
                            'thread' => $thread->getId()
                        )
                    ),
                    'text/html'
                );

            $this->mailer->send($message);
        }

    }
}