<?php

namespace Connection\UserBundle\Controller;

use Connection\UserBundle\Form\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/search")
 */
class SearchController extends Controller
{
    /**
     * @Route("/quick-form", name="search_quick_form")
     * @Template()
     */
    public function quickAction( Request $request )
    {
        $form               = $this->createForm( new SearchType() );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session = $request->getSession();
            $search  = $this->prepareSearchDataForSession($form->getData());
            $session->set('search', $search);
            return $this->redirect( $this->generateUrl('search_user_result') );
        }

        return $this->render('ConnectionUserBundle:Search:quick.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/user", name="search_user_result")
     * @Template()
     */
    public function searchResultAction( Request $request )
    {
        $session    = $request->getSession();
        $form       = $this->createForm( new SearchType() );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sessionSearch = $this->prepareSearchDataForSession($form->getData());
            $session->set('search', $sessionSearch);
        } else {
            $sessionSearch  = $session->get('search');
            $data           = $this->mapSearchClass($sessionSearch);
            $form->setData($data);
        }

        $users = $this->getDoctrine()->getRepository('ConnectionUserBundle:User')->search($sessionSearch);

        var_dump($users);die;
        return $this->render('ConnectionUserBundle:Search:quick.html.twig', array(
            'form'  => $form->createView(),
            'users' => $users
        ));
    }

    private function prepareSearchDataForSession($data)
    {
        $search = array();
        foreach ($data as $fieldName => $fieldValue) {
            if (is_object($fieldValue) && method_exists($fieldValue, 'getId')) {
                $search[$fieldName] = $fieldValue->getId();
            } else {
                $search[$fieldName] = $fieldValue;
            }
        }

        return $search;
    }

    private function mapSearchClass($search)
    {
        if (empty($search)) {
            return array();
        }

        //  DB Filters Mapping
        $classMapping = array(
            'drinking'              => 'ConnectionUserBundle:Profile\Drinking',
            'education'             => 'ConnectionUserBundle:Profile\Education',
            'ethnicity'             => 'ConnectionUserBundle:Profile\Ethnicity',
            'eyeColor'              => 'ConnectionUserBundle:Profile\EyeColor',
            'gender'                => 'ConnectionUserBundle:Profile\Gender',
            'seek'                  => 'ConnectionUserBundle:Profile\Gender',
            'haiColor'              => 'ConnectionUserBundle:Profile\HairColor',
            'haveChildren'          => 'ConnectionUserBundle:Profile\HaveChildren',
            'livesWithChildren'     => 'ConnectionUserBundle:Profile\LivesWithChildren',
            'lookingFor'            => 'ConnectionUserBundle:Profile\LookingFor',
            'maritalStatus'         => 'ConnectionUserBundle:Profile\MaritalStatus',
            'openToPersonWithKids'  => 'ConnectionUserBundle:Profile\OpenToPersonWithKids',
            'profession'            => 'ConnectionUserBundle:Profile\Profession',
            'religion'              => 'ConnectionUserBundle:Profile\Religion',
            'smoking'               => 'ConnectionUserBundle:Profile\Smoking',
            'wantChildren'          => 'ConnectionUserBundle:Profile\WantChildren',
            'country'               => 'ConnectionCoreBundle:Country',
            'state'                 => 'ConnectionCoreBundle:State',
        );

        $result = array();
        $em     = $this->getDoctrine()->getManager();

        array_walk($search, function(&$field, &$key) use ($em, $classMapping) {
            if (!empty($classMapping[$key]) && !empty($field)) {
                $field = $em->getRepository($classMapping[$key])->find($field);
            }
        });

        $search = array_filter($search);
        return $search;
    }
}
