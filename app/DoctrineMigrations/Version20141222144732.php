<?php

namespace Application\Migrations;

use Connection\CoreBundle\Entity\Language;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Version20141222144732 extends AbstractMigration implements ContainerAwareInterface
{
	/** @var EntityManager */
	private $em;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->em = $container->get('doctrine.orm.entity_manager');
	}

    public function up(Schema $schema)
    {
	    // Add ukrainian language
	    $language = new Language(67, 'Ukrainian');
	    $language->setCode('UA');
	    $this->em->persist($language);
	    $this->em->flush();

	    // Create religion priority
	    $table = $schema->getTable('user_religion');
	    $table->addColumn('priority', 'integer');
    }

	public function postUp(Schema $schema)
	{
		// Set religion priorities
	    $repo = $this->em->getRepository('ConnectionUserBundle:Profile\Religion');
		$religion = $repo->findOneBy(['name' => 'Non-religious']);
		$religion->setPriority(10);
		$this->em->persist($religion);
		$religion = $repo->findOneBy(['name' => 'Jewish']);
		$religion->setPriority(9);
		$this->em->persist($religion);
		$religion = $repo->findOneBy(['name' => 'Catholic']);
		$religion->setPriority(8);
		$this->em->persist($religion);
		$religion = $repo->findOneBy(['name' => 'Buddhist']);
		$religion->setPriority(7);
		$this->em->persist($religion);
		$religion = $repo->findOneBy(['name' => 'Hindu']);
		$religion->setPriority(6);
		$this->em->persist($religion);
		$religion = $repo->findOneBy(['name' => 'Christian-Orthodox']);
		$religion->setPriority(5);
		$this->em->persist($religion);
		$religion = $repo->findOneBy(['name' => 'Baptist']);
		$religion->setPriority(4);
		$this->em->persist($religion);
		$religion = $repo->findOneBy(['name' => 'Muslim']);
		$religion->setPriority(3);
		$this->em->persist($religion);
		$this->em->flush();
	}

    public function down(Schema $schema)
    {
	    $repo = $this->em->getRepository('ConnectionCoreBundle:Language');
	    $language = $repo->findOneBy(['name' => 'Ukrainian']);
	    $this->em->remove($language);
	    $this->em->flush();

	    $table = $schema->getTable('user_religion');
	    $table->dropColumn('priority');
    }
}
