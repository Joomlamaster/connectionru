<?php

namespace Application\Migrations;

use Connection\UserBundle\Entity\Profile;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Version20141209154201 extends AbstractMigration implements ContainerAwareInterface
{
	/** @var EntityManager */
	private $em;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->em = $container->get('doctrine.orm.entity_manager');
	}

    public function up(Schema $schema)
    {
	    $repo = $this->em->getRepository('ConnectionUserBundle:Profile\LookingFor');
		$lookingFor = $repo->findOneBy( array('name' => 'Intimate') );
		if ( $lookingFor ) {
			$userProfiles = $lookingFor->getProfile();
			$defaultLookingFor = $repo->find(1);

			/** @var Profile $profile */
			foreach ( $userProfiles as $profile ) {
				$profile->setLookingFor( $defaultLookingFor );
				$this->em->persist($profile);
			}
			$this->em->flush();

			$this->em->remove($lookingFor);
			$this->em->flush();
		}
    }

    public function down(Schema $schema)
    {
		$lookingFor = new Profile\LookingFor();
		$lookingFor->setName('Intimate');
	    $this->em->persist($lookingFor);
	    $this->em->flush();
    }
}
