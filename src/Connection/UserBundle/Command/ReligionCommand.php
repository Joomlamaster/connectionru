<?php

namespace Connection\UserBundle\Command;

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
class ReligionCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('religion:remove')
                ->setDescription('Remove religion from DB')
                ->addArgument('id', InputArgument::REQUIRED, 'religion id to delete');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em             = $this->getContainer()->get('doctrine')->getManager();
        $id             = $input->getArgument('id');
        $religion       = $em->getRepository('ConnectionUserBundle:Profile\Religion')->find($id);
        $religionName   = $religion->getName();

        if ( $religion ) {
            $em->remove($religion);
            $em->flush();
            $output->writeln("{$religionName} religion removed.");
        } else {
            $output->writeln('Could not find religion with ID: ' . $id);
        }
    }

}
