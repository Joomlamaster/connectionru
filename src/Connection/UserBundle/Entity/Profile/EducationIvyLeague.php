<?php

namespace Connection\UserBundle\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * EducationIvyLeague
 *
 * @ORM\Table(name="user_education_ivy_league")
 * @ORM\Entity
 */
class EducationIvyLeague
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile", mappedBy="educationIvyLeague")
     */
    private $profile;

    /**
     * @return int
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName ( $name )
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $profile
     */
    public function setProfile ( $profile )
    {
        $this->profile = $profile;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getProfile ()
    {
        return $this->profile;
    }
}
