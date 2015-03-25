<?php

namespace Application\Migrations;

use Connection\CoreBundle\Entity\Language;
use Connection\UserBundle\Entity\Profile\Drinking;
use Connection\UserBundle\Entity\Profile\Education;
use Connection\UserBundle\Entity\Profile\Ethnicity;
use Connection\UserBundle\Entity\Profile\EyeColor;
use Connection\UserBundle\Entity\Profile\HairColor;
use Connection\UserBundle\Entity\Profile\HaveChildren;
use Connection\UserBundle\Entity\Profile\Income;
use Connection\UserBundle\Entity\Profile\LivesWithChildren;
use Connection\UserBundle\Entity\Profile\Profession;
use Connection\UserBundle\Entity\Profile\Religion;
use Connection\UserBundle\Entity\Profile\Smoking;
use Connection\UserBundle\Entity\Profile\Zodiac;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150325114222 extends AbstractMigration implements ContainerAwareInterface
{
    /** @var EntityManager */
    private $em;

    private $value = 'Prefer not to say';

    public function setContainer(ContainerInterface $container = null)
    {
        $this->em = $container->get('doctrine.orm.entity_manager');
    }

    public function up(Schema $schema)
    {
        $eye = new EyeColor();
        $eye->setName($this->value);
        $this->em->persist($eye);

        $hair = new HairColor();
        $hair->setName($this->value);
        $this->em->persist($hair);

        $smoking = new Smoking();
        $smoking->setName($this->value);
        $this->em->persist($smoking);

        $drinking =  new Drinking();
        $drinking->setName($this->value);
        $this->em->persist($drinking);

        $income = new Income();
        $income->setName($this->value);
        $this->em->persist($income);

        $education = new Education();
        $education->setName($this->value);
        $this->em->persist($education);

        $profession = new Profession();
        $profession->setName($this->value);
        $this->em->persist($profession);

        $haveChildren = new HaveChildren();
        $haveChildren->setName($this->value);
        $this->em->persist($haveChildren);

        $livesWithChildren = new LivesWithChildren();
        $livesWithChildren->setName($this->value);
        $this->em->persist($livesWithChildren);

        $religion = new Religion();
        $religion->setName($this->value);
        $religion->setPriority(1);
        $this->em->persist($religion);

        $ethnicity = new Ethnicity();
        $ethnicity->setName($this->value);
        $this->em->persist($ethnicity);

        $zodiac = new Zodiac();
        $zodiac->setName($this->value);
        $this->em->persist($zodiac);

        $language = new Language(68, 'Romanian');
        $language->setCode('RO');
        $this->em->persist($language);

        $this->em->flush();
    }

    public function down(Schema $schema)
    {

        $repoEye = $this->em->getRepository('ConnectionUserBundle:Profile\EyeColor');
        $repoHair = $this->em->getRepository('ConnectionUserBundle:Profile\HairColor');
        $repoSmoking = $this->em->getRepository('ConnectionUserBundle:Profile\Smoking');
        $repoDrinking = $this->em->getRepository('ConnectionUserBundle:Profile\Drinking');
        $repoIncome = $this->em->getRepository('ConnectionUserBundle:Profile\Income');
        $repoEducation = $this->em->getRepository('ConnectionUserBundle:Profile\Education');
        $repoProfession = $this->em->getRepository('ConnectionUserBundle:Profile\Profession');
        $repoHaveChildren = $this->em->getRepository('ConnectionUserBundle:Profile\HaveChildren');
        $repoLivesWithChildren = $this->em->getRepository('ConnectionUserBundle:Profile\LivesWithChildren');
        $repoReligion = $this->em->getRepository('ConnectionUserBundle:Profile\Religion');
        $repoEthnicity = $this->em->getRepository('ConnectionUserBundle:Profile\Ethnicity');
        $repoZodiac = $this->em->getRepository('ConnectionUserBundle:Profile\Zodiac');
        $repoLanguage = $this->em->getRepository('ConnectionCoreBundle:Language');
        
        $eye = $repoEye->findOneBy(array('name' => $this->value));
        $this->em->remove($eye);

        $hair = $repoHair->findOneBy(array('name' => $this->value));
        $this->em->remove($hair);

        $smoking = $repoSmoking->findOneBy(array('name' => $this->value));
        $this->em->remove($smoking);

        $drinking = $repoDrinking->findOneBy(array('name' => $this->value));
        $this->em->remove($drinking);

        $income = $repoIncome->findOneBy(array('name' => $this->value));
        $this->em->remove($income);

        $education = $repoEducation->findOneBy(array('name' => $this->value));
        $this->em->remove($education);

        $profession = $repoProfession->findOneBy(array('name' => $this->value));
        $this->em->remove($profession);

        $haveChildren = $repoHaveChildren->findOneBy(array('name' => $this->value));
        $this->em->remove($haveChildren);

        $livesWithChildren = $repoLivesWithChildren->findOneBy(array('name' => $this->value));
        $this->em->remove($livesWithChildren);

        $religion = $repoReligion->findOneBy(array('name' => $this->value));
        $this->em->remove($religion);

        $ethnicity = $repoEthnicity->findOneBy(array('name' => $this->value));
        $this->em->remove($ethnicity);

        $zodiac = $repoZodiac->findOneBy(array('name' => $this->value));
        $this->em->remove($zodiac);

        $language = $repoLanguage->findOneBy(array('code' => 'RO'));
        $this->em->remove($language);

        $this->em->flush();
    }
}
