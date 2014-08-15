<?php

namespace Connection\EventBundle\Controller;

use Connection\EventBundle\Entity\Event;
use Connection\EventBundle\Form\EventType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * @Route("/event")
 */
class EventController extends Controller
{
    /**
     * @Route("/{id}", name="view_event", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function viewAction( Event $event)
    {
        $event->incViewed();
        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();

        return array(
            'event'   => $event,
            'owner'   => $event->getUser()
        );
    }

    /**
     * @Route("/manage/{id}", name="event_manage", defaults={"id" = null})
     * @Template()
     */
    public function manageAction(Request $request, $id)
    {
        if (!$user = $this->getUser()) {
            return $this->redirect( $this->generateUrl('connection_homepage') );
        }
        $em      = $this->getDoctrine()->getManager();
        $imageId = $request->get('image_id');
        if ( !$id || !$event = $em->getRepository('ConnectionEventBundle:Event')->find($id) ) {
            $event  = new Event();
        }

        $form = $this->createForm(new EventType(), $event);
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            if ( !empty($imageId) ) {
                $image = $em->getRepository('ConnectionUserBundle:Profile\Image')->find($imageId);
                $event->setImage($image);
            }

            $event->setUser($user);
            $em->persist($event);
            $em->flush();
            return $this->redirect( $this->generateUrl('event_manage', array('id' => $event->getId())) );
        }

        return array(
            'id' => $id,
            'form' => $form->createView(),
            'event' => $event
        );
    }

    /**
     * @Route("/", name="event")
     * @Template()
     */
    public function searchAction()
    {
        $events = $this->getDoctrine()->getRepository('ConnectionEventBundle:Event')->findAll();
        return array(
            'events' => $events,
        );
    }

    /**
     * @Route("/subscribe/{id}", name="event_subscribe", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function subscribeAction( Event $event )
    {
        if ( !$user = $this->getUser() ) {
            throw new AccessDeniedException("Not Logged IN");
        }

        if ( !$event->hasParticipant($user) ) {
            $user->setParticipateEvents($event);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return new JsonResponse();
    }

    /**
     * @Route("/unsubscribe/{id}", name="event_unsubscribe", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function unSubscribeAction( Event $event )
    {
        if ( !$user = $this->getUser() ) {
            throw new AccessDeniedException("Not Logged IN");
        }

        if ( $event->hasParticipant($user) ) {
            $user->getParticipateEvents()->removeElement($event);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return new JsonResponse();
    }

    /**
     * @Route("/interested/{id}", name="event_interested", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function interestedAction( Event $event )
    {
        if ( !$user = $this->getUser() ) {
            throw new AccessDeniedException("Not Logged IN");
        }

        if ( !$event->hasInterested($user) ) {
            $user->setInterestedInEvents($event);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return new JsonResponse();
    }

    /**
     * @Route("/not-interested/{id}", name="event_not_interested", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function notInterestedAction( Event $event )
    {
        if ( !$user = $this->getUser() ) {
            throw new AccessDeniedException("Not Logged IN");
        }

        if ( $event->hasInterested($user) ) {
            $user->getInterestedInEvents()->removeElement($event);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return new JsonResponse();
    }
}
