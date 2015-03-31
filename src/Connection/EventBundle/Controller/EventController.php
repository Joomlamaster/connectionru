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
 * @Route("/")
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

        $limit          = $this->container->getParameter('event.upcoming.block.limit');
        $upcomingEvents = $em->getRepository('ConnectionEventBundle:Event')->getUpcomingEvents($event, $limit);

        return array(
            'event'             => $event,
            'owner'             => $event->getUser(),
            'upcomingEvents'    => $upcomingEvents
        );
    }

    /**
     * @Route("/upcoming/{id}", name="view_upcoming_events", requirements={"id" = "\d+"})
     * @Template("ConnectionEventBundle:Event:view_upcoming.html.twig")
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function viewUpcomingAction( Event $event)
    {
        $upcomingEvents = $this->getDoctrine()->getRepository('ConnectionEventBundle:Event')->getUpcomingEvents($event);

        return array(
            'upcomingEvents'    => $upcomingEvents
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
        } else {
            if ($user->getId() !=  $event->getUser()->getId() ) {
                return $this->redirect( $this->generateUrl('connection_homepage') );
            }
        }

        $form = $this->createForm('connection_event_type', $event);
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            if ( !empty($imageId) ) {
                $image = $em->getRepository('ConnectionUserBundle:Profile\Image')->find($imageId);
                /* @var $oldImage \Connection\UserBundle\Entity\Profile\Image */
                $oldImage = $event->getImage();
                if($oldImage){
                    $oldImage->removeFiles();
                }
                $event->setImage($image);
            }

            $event->setUser($user);
            $em->persist($event);
            $em->flush();

            if ($id) {
                $redirectUrl = $this->generateUrl('event_manage', array('id' => $id));
            } else {
                $redirectUrl = $this->generateUrl('event_search');
            }
            return $this->redirect($redirectUrl);
        }

        return array(
            'id' => $id,
            'form' => $form->createView(),
            'event' => $event
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

    /**
     * @Route("/ajax-going/{id}", name="event_ajax_going", requirements={"id" = "\d+"})
     * @Template("ConnectionEventBundle:Event:going_interested.html.twig")
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function goingAjaxAction( Event $event, Request $request )
    {
        if (!$request->isXmlHttpRequest()) {
            throw new AccessDeniedException();
        }
        return array('participants' => $event->getParticipants()) ;
    }

    /**
     * @Route("/ajax-interested/{id}", name="event_ajax_interested", requirements={"id" = "\d+"})
     * @Template("ConnectionEventBundle:Event:going_interested.html.twig")
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     */
    public function interestedAjaxAction( Event $event, Request $request )
    {
        if (!$request->isXmlHttpRequest()) {
            throw new AccessDeniedException();
        }
        return array('participants' => $event->getInteresteds()) ;
    }

    /**
     * @Route("/remove/{id}", name="remove_profile_event", requirements={"id" = "\d+"})
     * @ParamConverter("Event", class="ConnectionEventBundle:Event")
     * @param Event $event
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeAction( Event $event)
    {
        if (!$user = $this->getUser()) {
            throw new AccessDeniedException();
        }

        if ($event->getUser()->getId() != $user->getId()) {
            throw new AccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();

        return $this->redirect( $this->generateUrl('edit_user_profile', array(
            'tab' => 'events'
        )));
    }
}
