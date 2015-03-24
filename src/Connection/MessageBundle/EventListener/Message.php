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

    /**
     * @param MessageManagerInterface $messageManager
     * @param Swift_Mailer $mailer
     * @param $params
     */
    public function __construct(MessageManagerInterface $messageManager, Swift_Mailer $mailer, $params, EngineInterface $templating)
    {
        $this->mailer = $mailer;
        $this->params = $params;
        $this->messageManager = $messageManager;
        $this->templating = $templating;

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
        $subject = $ms->getThread()->getSubject();
        $subject = "You received new email ( $subject )";
        $participants = $ms->getThread()->getParticipants();
        //not send notification user-self
        unset($participants[0]);

        foreach ($participants as $p) {
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
                        )
                    ),
                    'text/html'
                );

            $this->mailer->send($message);
        }

    }
}