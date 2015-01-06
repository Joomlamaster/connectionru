<?php

namespace Connection\AdminBundle\Controller;

use Connection\AdminBundle\Entity\Background;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class SettingsController extends Controller
{
    /**
     * @Route("/settings/background", name="admin_settings_background")
     * @Template()
     */
    public function backgroundAction()
    {
        $images = $this->getDoctrine()->getRepository('ConnectionAdminBundle:Background')->findAll();
        return array(
            'images' => $images,
            'headline' => "Background Settings"
        );
    }

    /**
     * @Route("/settings/background/set/{id}", name="admin_settings_background_set", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Background", class="ConnectionAdminBundle:Background")
     */
    public function backgroundSetAction( Background $background )
    {
        $em                 = $this->getDoctrine()->getManager();
        $defaultBackground  = $this->getDoctrine()
                                   ->getRepository('ConnectionAdminBundle:Background')
                                   ->findBy(array('isDefault' => 1));

        foreach ($defaultBackground as $elem) {
            $elem->setIsDefault(0);
            $em->persist($elem);
        }
        $em->flush();

        $background->setIsDefault(1);
        $em->persist($background);
        $em->flush();
        return $this->redirect( $this->generateUrl('admin_settings_background') );
    }

    /**
     * @Route("/settings/background/delete/{id}", name="admin_settings_background_delete", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("Background", class="ConnectionAdminBundle:Background")
     */
    public function backgroundDeleteAction( Background $background )
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($background);
        $em->flush();
        return $this->redirect( $this->generateUrl('admin_settings_background') );
    }
}
