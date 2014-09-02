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
class RemoveUserCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('user:delete')
                ->setDescription('Remove user from DB')
                ->addArgument('name', InputArgument::REQUIRED, 'user name to delete');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $this->getContainer()->get('doctrine')->getManager();
        $userRepo = $em->getRepository('ConnectionUserBundle:User');
        $name = $input->getArgument('name');

        $user = $userRepo->findOneBy(array('username' => $name));
        if ($user) {
            $em->remove($user);
            $em->flush();
            $output->writeln('Successfully deleted user: '.$name);
        } else {
            $output->writeln('Could not find user: '.$name);
        }
    }

}
