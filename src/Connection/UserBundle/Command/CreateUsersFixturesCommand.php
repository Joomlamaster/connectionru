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
class CreateUsersFixturesCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('user:create:fixtures')
                ->setDescription('Create User fixtures');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $this->getContainer()->get('doctrine')->getManager();
        $userRepo = $em->getRepository('ConnectionUserBundle:User');
        $countryRepo = $em->getRepository('ConnectionCoreBundle:Country');
        $stateRepo = $em->getRepository('ConnectionCoreBundle:State');
        $genderRepo = $em->getRepository('ConnectionUserBundle:Profile\Gender');
        $eventCategoryRepo = $em->getRepository('ConnectionEventBundle:Category');
        $userManager = $this->getContainer()->get('fos_user.user_manager');

        $rootDir = $this->getContainer()->get('kernel')->getRootDir().'/../web/';

        $userArray = $this->_getUserArray();

        foreach ($userArray as $userItem) {
            $output->writeln('Creating user: '.$userItem['username']);
            $user = $userRepo->findOneBy(array('username' => $userItem['username']));
            if($user){
                $em->remove($user);
                $em->flush();
            }

            $email = strtolower($userItem['username']) . '@mail.com';
            $user = new User();
            $user->setUsername($userItem['username']);
            $user->setEmail($email);
            $user->setPlainPassword('123456');
            $user->setEnabled(true);

            $profile = new Profile();
            $gender = $genderRepo->find($userItem['profile']['gender']);
            $profile->setGender($gender);
            $seek = $genderRepo->find($userItem['profile']['seek']);
            $profile->setSeek($seek);
            $profile->setBirthdate($userItem['profile']['birthdate']);
            $country = $countryRepo->findOneBy(array('iso' => $userItem['profile']['country']));
            $profile->setCountry($country);
            $state = $stateRepo->findOneBy(array('name' => $userItem['profile']['state']));
            $profile->setState($state);
            $user->setProfile($profile);
            $em->persist($user);
            $em->flush();

            foreach($userItem['events'] as $eventItem){
                $event = new Event();
                $event->setContactName($userItem['username']);
                $event->setTitle($eventItem['title']);
                $event->setDescription($eventItem['description']);
                $event->setEventDate($eventItem['date']);
                $event->setEmail($email);
                $event->setPhone('12345678');
                $event->setUser($user);
                $collection = new ArrayCollection();
                foreach($eventItem['categories'] as $categoryItem){
                    $category = $eventCategoryRepo->findOneBy(array('name'=> $categoryItem));
                    $collection->add($category);

                }
                $event->setCategory($collection);

                $image = new Image();
                $imageName = $userItem['username'].'Event.jpeg';
                $imagePath = 'uploads/user/event/'.$user->getId();
                $pathFrom = $rootDir.'uploads/user/fixtures/'.$imageName;
                $pathTo = $rootDir.$imagePath.'/'.$imageName;
                mkdir($rootDir.$imagePath);
                copy($pathFrom, $pathTo);
                $image->setName($imageName);
                $image->setPath('/'.$imagePath.'/'.$imageName);
                $event->setImage($image);
                $em->persist($event);
                $em->flush();
            }

            $gallery = $user->getGalleries()->first();
            $gallery->setUser($user);
            $gallery->setTitle('Profile Images');
            $gallery->setDefault(true);

            $image = new Image();
            $imageName = $userItem['username'].'.jpeg';
            $imagePath = 'uploads/user/profile/'.$user->getId();
            $pathFrom = $rootDir.'uploads/user/fixtures/'.$imageName;
            $pathTo = $rootDir.$imagePath.'/'.$imageName;
            mkdir($rootDir.$imagePath);
            copy($pathFrom, $pathTo);
            $image->setName($imageName);
            $image->setPath('/'.$imagePath.'/'.$imageName);
            $profile->setAvatar('/'.$imagePath.'/'.$imageName);
            $image->setGallery($gallery);

            $collection = new ArrayCollection();
            $collection->add($image);
            $gallery->setImages($collection);
            $em->persist($gallery);
            $em->flush();
        }
    }

    private function _getUserArray()
    {
        return array(
            0 => array(
                'username' => 'Adam',
                'profile' => array(
                    'gender' => 1,
                    'seek' => 2,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1980-01-01'),
                    'country' => 'US',
                    'state' => 'Alaska'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Surfing',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General',
                            '2' => 'Business Networking',
                            '3' => 'Families & Kids',
                            '4' => 'Single Moms & Pops'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2015-01-01'),
                    )
                )
            ),
            1 => array(
                'username' => 'Jimmy',
                'profile' => array(
                    'gender' => 1,
                    'seek' => 2,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1981-02-03'),
                    'country' => 'US',
                    'state' => 'Arizona'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Dance Party',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2015-01-01'),
                    )
                )
            ),
            2 => array(
                'username' => 'WillSmith',
                'profile' => array(
                    'gender' => 1,
                    'seek' => 2,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1982-03-04'),
                    'country' => 'US',
                    'state' => 'Florida'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Stars Party',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2015-01-01'),
                    )
                )
            ),
            3 => array(
                'username' => 'Samantha',
                'profile' => array(
                    'gender' => 2,
                    'seek' => 1,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1983-04-05'),
                    'country' => 'US',
                    'state' => 'Arkansas'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Fashion Show',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2015-01-01'),
                    )
                )
            ),
            4 => array(
                'username' => 'Angelina',
                'profile' => array(
                    'gender' => 2,
                    'seek' => 1,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1985-04-05'),
                    'country' => 'US',
                    'state' => 'Arkansas'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Hollywood Party',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2014-12-06'),
                    )
                )
            ),
            5 => array(
                'username' => 'Avril',
                'profile' => array(
                    'gender' => 2,
                    'seek' => 1,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1975-04-05'),
                    'country' => 'US',
                    'state' => 'Arkansas'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Avril Lavigne Concert',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2015-06-01'),
                    )
                )
            ),
            6 => array(
                'username' => 'HewLorry',
                'profile' => array(
                    'gender' => 1,
                    'seek' => 2,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1989-04-05'),
                    'country' => 'US',
                    'state' => 'Arkansas'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Chirurgy Party',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2014-10-01'),
                    )
                )
            ),
            7 => array(
                'username' => 'Monica',
                'profile' => array(
                    'gender' => 2,
                    'seek' => 1,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1990-04-05'),
                    'country' => 'US',
                    'state' => 'Kansas'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Girls Party',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2014-10-01'),
                    )
                )
            ),
            8 => array(
                'username' => 'Sarha',
                'profile' => array(
                    'gender' => 2,
                    'seek' => 1,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1991-04-05'),
                    'country' => 'DE',
                    'state' => 'Bavaria'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Party On The Beach',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2014-10-01'),
                    )
                )
            ),
            9 => array(
                'username' => 'Eveline',
                'profile' => array(
                    'gender' => 2,
                    'seek' => 1,
                    'birthdate' => \DateTime::createFromFormat('Y-m-d', '1995-04-05'),
                    'country' => 'IT',
                    'state' => 'Lazio'
                ),
                'events' => array(
                    0 => array(
                        'title' => 'Party Night',
                        'description' => 'Event description',
                        'categories' => array(
                            '1' => 'General'
                        ),
                        'date' => \DateTime::createFromFormat('Y-m-d', '2014-10-01'),
                    )
                )
            ),
        );
    }


}
