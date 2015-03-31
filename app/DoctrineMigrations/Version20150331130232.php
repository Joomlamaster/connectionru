<?php

namespace Application\Migrations;

use Connection\CoreBundle\Entity\Language;
use Connection\UserBundle\Entity\Profile\Profession;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150331130232 extends AbstractMigration implements ContainerAwareInterface
{
    /** @var EntityManager */
    private $em;

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->em = $container->get('doctrine.orm.entity_manager');
    }

    public function up(Schema $schema)
    {
        $profession = new Profession();
        $profession->setName("Other");
        $this->em->persist($profession);

        $language = new Language(69, 'Norwegian');
        $language->setCode('NO');
        $this->em->persist($language);
        $this->em->flush();

        $repoLanguage = $this->em->getRepository('ConnectionCoreBundle:Language');

        $language = $repoLanguage->findOneBy(array('name' => "English"));
        $language->setPriority(18);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Russian"));
        $language->setPriority(17);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Spanish"));
        $language->setPriority(16);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Hebrew"));
        $language->setPriority(15);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "French"));
        $language->setPriority(14);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Romanian"));
        $language->setPriority(13);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Italian"));
        $language->setPriority(12);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Norwegian"));
        $language->setPriority(11);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "German"));
        $language->setPriority(10);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Portuguese"));
        $language->setPriority(9);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Arabic"));
        $language->setPriority(8);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Polish"));
        $language->setPriority(7);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Dutch"));
        $language->setPriority(6);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Ukrainian"));
        $language->setPriority(5);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Hindi"));
        $language->setPriority(4);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Czech"));
        $language->setPriority(3);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Turkish"));
        $language->setPriority(2);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Other"));
        $language->setPriority(1);
        $this->em->persist($language);

        $this->em->flush();

    }

    public function down(Schema $schema)
    {
        $repoProfession = $this->em->getRepository('ConnectionUserBundle:Profile\Profession');
        $profession = $repoProfession->findOneBy(array('name' => "Other"));
        $this->em->remove($profession);

        $repoLanguage = $this->em->getRepository('ConnectionCoreBundle:Language');
        $language = $repoLanguage->findOneBy(array('name' => "Norwegian"));
        $this->em->remove($language);

        $language = $repoLanguage->findOneBy(array('name' => "English"));
        $language->setPriority(11);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Russian"));
        $language->setPriority(10);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Spanish"));
        $language->setPriority(9);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Hebrew"));
        $language->setPriority(8);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "French"));
        $language->setPriority(7);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Romanian"));
        $language->setPriority(0);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Italian"));
        $language->setPriority(6);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "German"));
        $language->setPriority(5);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Portuguese"));
        $language->setPriority(4);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Arabic"));
        $language->setPriority(3);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Polish"));
        $language->setPriority(0);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Dutch"));
        $language->setPriority(1);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Ukrainian"));
        $language->setPriority(0);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Hindi"));
        $language->setPriority(0);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Czech"));
        $language->setPriority(0);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Turkish"));
        $language->setPriority(0);
        $this->em->persist($language);

        $language = $repoLanguage->findOneBy(array('name' => "Other"));
        $language->setPriority(0);
        $this->em->persist($language);

        $this->em->flush();

    }
}
