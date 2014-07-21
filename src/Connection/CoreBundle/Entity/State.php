<?php

namespace Connection\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table(name="state")
 * @ORM\Entity
 */
class State
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\CoreBundle\Entity\Country", inversedBy="state")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     **/
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=50)
     */
    private $timezone;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile", mappedBy="state")
     */
    private $profile;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\EventBundle\Entity\Event", mappedBy="state")
     */
    private $event;

    /**
     * @return int
     */
    public function getId ()
    {
        return $this->id;
    }
    /**
     * @param mixed $country
     */
    public function setCountry ( $country )
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry ()
    {
        return $this->country;
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
     * @param string $timezone
     */
    public function setTimezone ( $timezone )
    {
        $this->timezone = $timezone;
    }

    /**
     * @return string
     */
    public function getTimezone ()
    {
        return $this->timezone;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $event
     */
    public function setEvent ( $event )
    {
        $this->event = $event;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getEvent ()
    {
        return $this->event;
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
