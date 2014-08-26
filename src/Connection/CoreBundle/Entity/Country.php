<?php

namespace Connection\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity()
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=45)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="iso3", type="string", length=45)
     */
    private $iso3;

    /**
     * @var string
     *
     * @ORM\Column(name="fips", type="string", length=45)
     */
    private $fips;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="continent", type="string", length=45)
     */
    private $continent;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=45)
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_name", type="string", length=45)
     */
    private $currencyName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_prefix", type="string", length=45)
     */
    private $phonePrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=45)
     */
    private $postal_code;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=45)
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="geonameid", type="string", length=45)
     */
    private $geoNameId;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\CoreBundle\Entity\State", mappedBy="country", cascade={"persist", "remove"})
     */
    private $state;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile", mappedBy="country")
     */
    private $profile;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\EventBundle\Entity\Event", mappedBy="country")
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
     * @param string $iso
     */
    public function setIso ( $iso )
    {
        $this->iso = $iso;
    }

    /**
     * @return string
     */
    public function getIso ()
    {
        return $this->iso;
    }

    /**
     * @param string $iso3
     */
    public function setIso3 ( $iso3 )
    {
        $this->iso3 = $iso3;
    }

    /**
     * @return string
     */
    public function getIso3 ()
    {
        return $this->iso3;
    }

    /**
     * @param string $fips
     */
    public function setFips ( $fips )
    {
        $this->fips = $fips;
    }

    /**
     * @return string
     */
    public function getFips ()
    {
        return $this->fips;
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
     * @param string $continent
     */
    public function setContinent ( $continent )
    {
        $this->continent = $continent;
    }

    /**
     * @return string
     */
    public function getContinent ()
    {
        return $this->continent;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode ( $currencyCode )
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode ()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyName
     */
    public function setCurrencyName ( $currencyName )
    {
        $this->currencyName = $currencyName;
    }

    /**
     * @return string
     */
    public function getCurrencyName ()
    {
        return $this->currencyName;
    }

    /**
     * @param string $phonePrefix
     */
    public function setPhonePrefix ( $phonePrefix )
    {
        $this->phonePrefix = $phonePrefix;
    }

    /**
     * @return string
     */
    public function getPhonePrefix ()
    {
        return $this->phonePrefix;
    }

    /**
     * @param string $postal_code
     */
    public function setPostalCode ( $postal_code )
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return string
     */
    public function getPostalCode ()
    {
        return $this->postal_code;
    }

    /**
     * @param string $languages
     */
    public function setLanguages ( $languages )
    {
        $this->languages = $languages;
    }

    /**
     * @return string
     */
    public function getLanguages ()
    {
        return $this->languages;
    }

    /**
     * @param string $geoNameId
     */
    public function setGeoNameId ( $geoNameId )
    {
        $this->geoNameId = $geoNameId;
    }

    /**
     * @return string
     */
    public function getGeoNameId ()
    {
        return $this->geoNameId;
    }

    /**
     * Set priority
     *
     * @param integer priority
     * @return Language
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }
}
