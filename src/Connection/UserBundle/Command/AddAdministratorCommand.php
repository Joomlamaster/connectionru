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
class AddAdministratorCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('user:add-admin')
                ->setDescription('Add Administrator')
                ->addArgument('name', InputArgument::REQUIRED, 'user name')
                ->addArgument('password', InputArgument::REQUIRED, 'password');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username       = $input->getArgument('name');
        $password       = $input->getArgument('password');
        $userService    = $this->getContainer()->get('connection_user.social.user');
        $user           = new User();

        $user->setUsername($username);
        $user->setEmail($username . "@gmail.com");
        $user->setPassword($userService->generatePassword($password, $user));
        $user->setRoles(array('ROLE_USER', 'ROLE_VERIFIED_USER', 'ROLE_ADMIN'));
        $user->setProfile( new Profile() );
        $user->setEnabled(1);

        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $this->getContainer()->get('doctrine')->getManager();
        $em->persist($user);
        $em->flush();

        $output->write("Admin User Created: UserName: {$username}, Password: {$password} ");
    }

}
