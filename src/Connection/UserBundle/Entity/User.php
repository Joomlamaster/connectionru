<?php

namespace Connection\UserBundle\Entity;

use Connection\UserBundle\Entity\Profile\Gallery;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
use Connection\EventBundle\Entity\Event;
use FOS\MessageBundle\Model\ParticipantInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Connection\UserBundle\Entity\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser implements ParticipantInterface
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

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\EventBundle\Entity\Event", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $events;

    /**
     * @ORM\ManyToMany(targetEntity="Connection\EventBundle\Entity\Event", inversedBy="participants")
     * @ORM\JoinTable(name="event_participant")
     **/
    private $participateEvents;

    /**
     * @ORM\ManyToMany(targetEntity="Connection\EventBundle\Entity\Event", inversedBy="interested")
     * @ORM\JoinTable(name="event_interested")
     **/
    private $interestedInEvents;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\ManyToMany(targetEntity="Connection\UserBundle\Entity\User", inversedBy="id")
     * @ORM\JoinTable(name="favorite_users")
     **/
    private $favoriteUsers;

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
     * @return \Connection\UserBundle\Entity\Profile\Gallery
     */
    public function addGallery ( Gallery $gallery )
    {
        $this->galleries[] = $gallery;
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
     * @ORM\PrePersist
     */
    public function addDefaultGallery ()
    {
        $gallery = new Gallery();
        $gallery->setUser($this);
        $gallery->setDefault(true);
        $this->addGallery($gallery);
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
     * @param \Doctrine\Common\Collections\ArrayCollection $event
     */
    public function setEvent ( Event $event )
    {
        $this->events[] = $event;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getEvents ()
    {
        return $this->events;
    }

    /**
     * @param mixed $participateEvents
     */
    public function setParticipateEvents ( Event $event )
    {
        $this->participateEvents[] = $event;
    }

    /**
     * @return mixed
     */
    public function getParticipateEvents ()
    {
        return $this->participateEvents;
    }

    /**
     * @param mixed $participateEvents
     */
    public function setInterestedInEvents ( Event $event )
    {
        $this->interestedInEvents[] = $event;
    }

    /**
     * @return mixed
     */
    public function getInterestedInEvents ()
    {
        return $this->interestedInEvents;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
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

    /**
     *
     * @param \Connection\UserBundle\Entity\User $user
     */
    public function addFavoriteUser(User $user){
        $this->favoriteUsers->add($user);
        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getFavoriteUsers(){
        $this->favoriteUsers;
    }

    /**
     *
     * @param \Connection\UserBundle\Entity\User $user
     */
    public function removeFavoriteUser(User $user){
        $this->favoriteUsers->removeElement($user);
        return $this;
    }

    /**
     *
     * @param \Connection\UserBundle\Entity\User $user
     */
    public function hasFavoriteUser(User $user){
        return $this->favoriteUsers->contains($user);
    }
}