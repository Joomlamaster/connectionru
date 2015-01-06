<?php

namespace Connection\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Connection\UserBundle\Entity\User;
use Connection\UserBundle\Entity\Profile;
use Connection\EventBundle\Entity\Event;
use Connection\UserBundle\Entity\Profile\Gallery;
use Connection\UserBundle\Entity\Profile\Image;

/**
 * Description of CreateUsersFixturesCommand
 *
 * @author vpinzaru
 */
class OrderStatesCommand extends ContainerAwareCommand
{
    private $defaultPriority = 1000;
    private $output;

    protected function configure()
    {
        $this->setName('state:order')
            ->setDescription('Remove user from DB')
            ->addArgument('countryId', InputArgument::OPTIONAL, 'Sort Only One Country')
            ->addArgument('default', InputArgument::OPTIONAL, 'Default State Id, will have higher priority');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em             = $this->getContainer()->get('doctrine')->getManager();
        $this->output   = $output;
        $countryId      = $input->getArgument('countryId');
        $defaultStateId = $input->getArgument('default');

        if ( empty($countryId) ) {
            $this->sortAllStates();
        } else {
            $this->sortStatesByCountry($countryId, $defaultStateId);
        }
    }

    private function sortAllStates()
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em         = $this->getContainer()->get('doctrine')->getManager();
        $countries  = $em->getRepository('ConnectionCoreBundle:Country')->findAll();

        foreach ( $countries as $country ) {
            $this->output->writeln("Sort Country: {$country->getName()}");
            $states     = $country->getState();

            if ( !empty($states) ) {
                $priority   = count($states);
                foreach ($states as $state) {
                    $state->setPriority($priority);
                    $em->persist($state);
                    $priority--;
                }
            }
        }
        $em->flush();
    }

    private function sortStatesByCountry( $countryId, $defaultStateId = false )
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em         = $this->getContainer()->get('doctrine')->getManager();
        $country    = $em->getRepository('ConnectionCoreBundle:Country')->find($countryId);

        if ( empty($country) ) {
            $this->output->writeln("No Country found with ID: {$countryId}");
            return;
        }

        $this->output->writeln("Sort country: {$country->getName()}");
        $states = $country->getState();

        if ( empty($states) ) {
            $this->output->writeln("No States found for Country with ID: {$countryId}");
            return;
        }

        $priority   = count($states);
        foreach ( $states as $state ) {
            if ( !empty($defaultStateId) && $defaultStateId == $state->getId() ) {
                $this->output->writeln("Set priority 1000 for state : {$state->getName()}");
                $state->setPriority(1000);
            } else {
                $this->output->writeln("Set priority {$priority} for state : {$state->getName()}");
                $state->setPriority($priority);
            }
            $em->persist($state);
            $priority--;
        }
        $em->flush();
    }
}