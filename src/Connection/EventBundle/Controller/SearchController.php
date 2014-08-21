<?php

namespace Connection\EventBundle\Controller;

use Connection\EventBundle\Entity\Event;
use Connection\EventBundle\Form\EventType;
use Connection\EventBundle\Form\SearchType;
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
        $filter     = array();
        $filteredBy = array();
        $topLimit   = $this->container->getParameter('search.event.top.per_page');
        $limit      = $this->container->getParameter('search.event.per_page');

        $topOffset  = ($page * ($topLimit + $limit)) - ($topLimit + $limit);
        $offset     = ($page * ($topLimit + $limit)) - ($limit);

        $total      = $this->getDoctrine()->getRepository('ConnectionEventBundle:Event')->countAll();
        $pages      = ceil( ($total / ($topLimit + $limit)) );

        $form = $this->createForm( new SearchType() );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $filter = $form->getData();
            $filteredBy = $this->filteredBy($filter);
        }

        $topEvents = $this->getDoctrine()
            ->getRepository('ConnectionEventBundle:Event')
            ->search( $filter, $topLimit, $topOffset );

        $events    = $this->getDoctrine()
            ->getRepository('ConnectionEventBundle:Event')->search( $filter, $limit, $offset );

        return array(
            'topEvents'     => $topEvents,
            'events'        => $events,
            'pages'         => $pages,
            'currentPage'   => $page,
            'form'          => $form->createView(),
            'filteredBy'    => $filteredBy
        );
    }

    private function filteredBy($formData) {
        $filteredBy = array();

        $filteredBy['Date From'] = $formData['eventDateFrom']->format('Y-m-d');

        var_dump($filteredBy);die;
        return true;
    }
}
