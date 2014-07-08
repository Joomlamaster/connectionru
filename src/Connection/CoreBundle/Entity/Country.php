<?php

namespace Connection\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="Connection\CoreBundle\Repository\CountryRepository")
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=50)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", columnDefinition="CHAR(2) NOT NULL")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="db_id", type="string", length=50)
     */
    private $dbId;


    /**
     * Set id
     *
     * @param integer $id
     * @return Country
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set iso
     *
     * @param string $iso
     * @return Country
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string 
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Country
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dbId
     *
     * @param string $dbId
     * @return Country
     */
    public function setDbId($dbId)
    {
        $this->dbId = $dbId;

        return $this;
    }

    /**
     * Get dbId
     *
     * @return string 
     */
    public function getDbId()
    {
        return $this->dbId;
    }
}
