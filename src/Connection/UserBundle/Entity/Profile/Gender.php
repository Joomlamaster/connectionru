<?php

namespace Connection\UserBundle\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="user_gender")
 * @ORM\Entity
 */
class Gender
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
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile", mappedBy="gender")
     */
    private $profile;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile", mappedBy="seek")
     */
    private $seek;

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

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $seek
     */
    public function setSeek ( $seek )
    {
        $this->seek = $seek;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getSeek ()
    {
        return $this->seek;
    }
}
