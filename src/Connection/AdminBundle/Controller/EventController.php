<?php

namespace Connection\AdminBundle\Controller;

use Connection\AdminBundle\Entity\Background;
use Connection\EventBundle\Entity\Event;
use Connection\EventBundle\Entity\EventComment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class EventController extends Controller
{
    /**
     * @Route("/events", name="admin_event_index")
     * @Template()
     */
    public function indexAction()
    {
        $events = $this->getDoctrine()->getRepository("ConnectionEventBundle:Event")->findAll();
        return array(
            'events' => $events,
            'headline' => "Events"
        );
    }

    /**
     * @Route("/event/delete/{id}", name="admin_event_delete", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function deleteAction( Event $event )
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();

        return $this->redirect( $this->generateUrl('admin_event_index') );
    }

    /**
     * @Route("/event/comments/{id}", name="admin_event_comments_view", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function commentsViewAction( Event $event )
    {
        $comments = $event->getComments();
        return array(
            'comments' => $comments,
            'headline' => "Comments"
        );
    }

    /**
     * @Route("/event/comment/delete/{id}", name="admin_event_comment_delete", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:EventComment")
     */
    public function deleteCommentAction( EventComment $comment )
    {
        $eventId = $comment->getEvent()->getId();
        $em = $this->getDoctrine()->getManager();
        $em->remove($comment);
        $em->flush();

        return $this->redirect( $this->generateUrl('admin_event_comments_view', array('id' => $eventId)) );
    }
}
