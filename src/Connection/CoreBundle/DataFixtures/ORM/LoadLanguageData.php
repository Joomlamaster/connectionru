<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/4/14
 * Time: 4:43 PM
 */

namespace Connection\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Connection\CoreBundle\Entity\Language;

class LoadLanguageData implements FixtureInterface, ContainerAwareInterface{

    /* @var ContainerInterface */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager){
        $languages = $this->container->getParameter('languages');
        foreach($languages as $id => $language){
            $language = new Language($id, $language);
            $manager->persist($language);
        }
        $manager->flush();
    }
} 