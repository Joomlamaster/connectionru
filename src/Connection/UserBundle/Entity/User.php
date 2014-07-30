<?php

namespace Connection\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Connection\UserBundle\Entity\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\OneToOne(targetEntity="Connection\UserBundle\Entity\Profile", mappedBy="user", cascade={"persist", "remove"})
     **/
    private $profile;

    /**
     * @var integer
     *
     * @ORM\Column(name="packet_plan", type="integer", nullable=true)
     */
    protected $packetPlan;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="packet_activated", type="datetime", nullable=true)
     */
    protected $packetActivated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="packet_active", type="boolean", nullable=true)
     */
    protected $packetActive;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile\Gallery", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $galleries;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile\Address", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $addresses;

//    /**
//     * @var \Doctrine\Common\Collections\ArrayCollection
//     * @ORM\OneToMany(targetEntity="Event", mappedBy="user", cascade={"persist", "remove"})
//     */
//    // ToDo: Add Relation With Event
//    protected $events;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    protected $deletedAt;

    /**
     * @return int
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName ( $firstName )
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName ()
    {
        return $this->firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName ( $lastName )
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName ()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $profile
     */
    public function setProfile ( $profile )
    {
        $this->profile = $profile;
    }

    /**
     * @return mixed
     */
    public function getProfile ()
    {
        return $this->profile;
    }

    /**
     * @param int $packetPlan
     */
    public function setPacketPlan ( $packetPlan )
    {
        $this->packetPlan = $packetPlan;
    }

    /**
     * @return int
     */
    public function getPacketPlan ()
    {
        return $this->packetPlan;
    }

    /**
     * @param \Connection\UserBundle\Entity\DateTime $packetActivated
     */
    public function setPacketActivated ( $packetActivated )
    {
        $this->packetActivated = $packetActivated;
    }

    /**
     * @return \Connection\UserBundle\Entity\DateTime
     */
    public function getPacketActivated ()
    {
        return $this->packetActivated;
    }

    /**
     * @param boolean $packetActive
     */
    public function setPacketActive ( $packetActive )
    {
        $this->packetActive = $packetActive;
    }

    /**
     * @return boolean
     */
    public function getPacketActive ()
    {
        return $this->packetActive;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $galleries
     */
    public function setGalleries ( $galleries )
    {
        $this->galleries = $galleries;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getGalleries ()
    {
        return $this->galleries;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $addresses
     */
    public function setAddresses ( $addresses )
    {
        $this->addresses = $addresses;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAddresses ()
    {
        return $this->addresses;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAt()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return \Connection\UserBundle\Entity\DateTime
     */
    public function getCreatedAt ()
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setUpdatedAt ()
    {
        $this->updatedAt = new \DateTime();
    }

    /**
     * @return \Connection\UserBundle\Entity\DateTime
     */
    public function getUpdatedAt ()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreRemove
     */
    public function setDeletedAt ()
    {
        $this->deletedAt = new \DateTime();;
    }

    /**
     * @return \Connection\UserBundle\Entity\DateTime
     */
    public function getDeletedAt ()
    {
        return $this->deletedAt;
    }

    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function setProfileUser ()
    {
        if ( $this->getProfile() && !$this->getProfile()->getUser() ) {
            $this->getProfile()->setUser($this);
        }

        if (  $this->getProfile() && !$this->hasRole('ROLE_VERIFIED_USER') ) {
            $this->setRoles(array('ROLE_VERIFIED_USER'));
        }
    }
}
