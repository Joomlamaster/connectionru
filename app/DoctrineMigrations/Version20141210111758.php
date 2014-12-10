<?php

namespace Application\Migrations;

use Connection\UserBundle\Entity\Profile\Religion;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Version20141210111758 extends AbstractMigration implements ContainerAwareInterface
{
	/** @var EntityManager */
	private $em;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->em = $container->get('doctrine.orm.entity_manager');
	}

	public function up(Schema $schema)
	{
		$repo = $this->em->getRepository('ConnectionUserBundle:Profile\Religion');
		/** @var Religion $religion */
		$religion = $repo->findOneBy( array('name' => 'Christian - other') );

		if ( $religion ) {
			$religion->setName( 'Christian-Orthodox' );
			$this->em->persist($religion);
			$this->em->flush();
		}
	}

	public function down(Schema $schema)
	{
		$repo = $this->em->getRepository('ConnectionUserBundle:Profile\Religion');
		/** @var Religion $religion */
		$religion = $repo->findOneBy( array('name' => 'Christian-Orthodox') );

		if ( $religion ) {
			$religion->setName( 'Christian - other' );
			$this->em->persist($religion);
			$this->em->flush();
		}
	}
}
