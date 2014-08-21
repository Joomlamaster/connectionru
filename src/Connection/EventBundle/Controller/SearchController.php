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
 * @Route("/search")
 */
class SearchController extends Controller
{
    /**
     * @Route("/{page}", name="event_search", requirements={"page" = "\d+"}, defaults={"page" = 1})
     * @Template()
     */
    public function searchAction( Request $request, $page )
    {
        $topLimit   = $this->container->getParameter('search.event.top.per_page');
        $limit      = $this->container->getParameter('search.event.per_page');

        $topOffset  = ($page * ($topLimit + $limit)) - ($topLimit + $limit);
        $offset     = ($page * ($topLimit + $limit)) - ($limit);

        $total      = $this->getDoctrine()->getRepository('ConnectionEventBundle:Event')->countAll();
        $pages      = ceil( ($total / ($topLimit + $limit)) );

        $topEvents = $this->getDoctrine()
            ->getRepository('ConnectionEventBundle:Event')
            ->search( array(), $topLimit, $topOffset );

        $events    = $this->getDoctrine()
            ->getRepository('ConnectionEventBundle:Event')->search( array(), $limit, $offset );

        return array(
            'topEvents'     => $topEvents,
            'events'        => $events,
            'pages'         => $pages,
            'currentPage'   => $page
        );
    }
}
