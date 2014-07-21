<?php

namespace Connection\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Connection\EventBundle\Entity\Event;
use Connection\EventBundle\Form\EventType;

/**
 * Event controller.
 */
class EventController extends Controller
{

    /**
     * @Route("/", name="event")
     * @Template()
     */
    public function indexAction()
    {
        $entities = $this->getDoctrine()->getRepository('ConnectionEventBundle:Event')->findAll();
        return array(
            'entities' => $entities,
        );
    }

    /**
     * @Route("/manage/{id}", name="event_manage", defaults={"id" = null})
     * @Template()
     */
    public function manageAction(Request $request, $id)
    {
        $em     = $this->getDoctrine()->getManager();
        if ( !$id || !$event = $em->getRepository('ConnectionEventBundle:Event')->find($id) ) {
            $event  = new Event();
        }

        $form = $this->createForm(new EventType(), $event);
        $form->handleRequest($request);

        if ( $form->isSubmitted() ) {
            if ( $form->isValid() ) {
                $em->persist($event);
                $em->flush();
                return $this->redirect( $this->generateUrl('event_manage', array('id' => $event->getId())) );
            }
        }

        return array(
            'id' => $id,
            'form' => $form->createView(),
        );
    }
}
