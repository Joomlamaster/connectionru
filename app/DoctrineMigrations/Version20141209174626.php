<?php

namespace Application\Migrations;

use Connection\UserBundle\Entity\Profile\Profession;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Version20141209174626 extends AbstractMigration implements ContainerAwareInterface
{
	/** @var EntityManager */
	private $em;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->em = $container->get('doctrine.orm.entity_manager');
	}

	public function up(Schema $schema)
	{
		$repo = $this->em->getRepository('ConnectionUserBundle:Profile\Profession');
		/** @var Profession $profession */
		$profession = $repo->findOneBy( array('name' => 'Attorney/Legal') );

		if ( $profession ) {
			$profession->setName( 'Attorney' );
			$this->em->persist($profession);
			$this->em->flush();
		}
	}

    public function down(Schema $schema)
    {
	    $repo = $this->em->getRepository('ConnectionUserBundle:Profile\Profession');
	    /** @var Profession $profession */
	    $profession = $repo->findOneBy( array('name' => 'Attorney') );

	    if ( $profession ) {
		    $profession->setName( 'Attorney/Legal' );
		    $this->em->persist($profession);
		    $this->em->flush();
	    }

    }
}
