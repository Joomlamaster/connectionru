<?php

namespace Connection\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Connection\UserBundle\Entity\User;

/**
 * event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="Connection\EventBundle\Entity\EventRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Event
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
     * @ORM\ManyToMany(targetEntity="Connection\EventBundle\Entity\Category", inversedBy="event")
     * @ORM\JoinTable(name="event_event_category")
     **/
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\CoreBundle\Entity\Country", inversedBy="event")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     **/
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\CoreBundle\Entity\State", inversedBy="event")
     * @ORM\JoinColumn(name="state", referencedColumnName="id")
     **/
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $contactName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_date", type="datetime")
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="venue", type="string", length=255)
     */
    private $venue;

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
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=255, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=255, nullable=true)
     */
    private $lng;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\User", inversedBy="events")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     **/
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="viewed", type="integer")
     */
    private $viewed = 0;

    /**
     * @ORM\ManyToMany(targetEntity="Connection\UserBundle\Entity\User", mappedBy="participateEvents")
     **/
    private $participants;

    /**
     * @ORM\ManyToMany(targetEntity="Connection\UserBundle\Entity\User", mappedBy="interestedInEvents")
     **/
    private $interesteds;

    /**
     * @ORM\OneToOne(targetEntity="Connection\UserBundle\Entity\Profile\Image", inversedBy="event", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="image", referencedColumnName="id")
     **/
    private $image;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\EventBundle\Entity\EventComment", mappedBy="event", cascade={"persist", "remove"})
     */
    private $comments;


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
     * Set category
     *
     * @param \stdClass $category
     * @return event
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \stdClass
     */
    public function getCategory()
    {
        return $this->category;
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
     * Set location
     *
     * @param \stdClass $location
     * @return event
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get location
     *
     * @return \stdClass
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return event
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return event
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set zipCode
     *
     * @param integer $zipCode
     * @return event
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return integer
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return event
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return event
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return event
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @ORM\preUpdate
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
     * @param string $lat
     */
    public function setLat ( $lat )
    {
        $this->lat = $lat;
    }

    /**
     * @return string
     */
    public function getLat ()
    {
        return $this->lat;
    }

    /**
     * @param string $lng
     */
    public function setLng ( $lng )
    {
        $this->lng = $lng;
    }

    /**
     * @return string
     */
    public function getLng ()
    {
        return $this->lng;
    }

    /**
     * @param mixed $user
     */
    public function setUser ( User $user )
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser ()
    {
        return $this->user;
    }

    /**
     * @param int $viewed
     */
    public function incViewed ()
    {
        $this->viewed = $this->viewed + 1;
    }

    /**
     * @return int
     */
    public function getViewed ()
    {
        return $this->viewed;
    }

    /**
     * @param mixed $participants
     */
    public function setParticipant ( User $user )
    {
        $this->participants[] = $user;
    }

    /**
     * @return mixed
     */
    public function getParticipants ()
    {
        return $this->participants;
    }

    public function hasParticipant( User $user ) {
        return ($this->getParticipants()->contains($user));
    }

    public function countParticipants() {
        return count($this->getParticipants());
    }

    /**
     * @param mixed $participants
     */
    public function setInterested ( User $user )
    {
        $this->interesteds[] = $user;
    }

    /**
     * @return mixed
     */
    public function getInteresteds ()
    {
        return $this->interesteds;
    }

    public function hasInterested( User $user ) {
        return ($this->getInteresteds()->contains($user));
    }

    public function countInteresteds() {
        return count($this->getInteresteds());
    }

    /**
     * @param mixed $image
     */
    public function setImage ( $image )
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage ()
    {
        return $this->image;
    }

    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function setImageEvent ()
    {
        if ( $this->getImage() && !$this->getImage()->getEvent() ) {
            $this->getImage()->setEvent($this);
        }
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $comments
     */
    public function setComments ( $comments )
    {
        $this->comments = $comments;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getComments ()
    {
        return $this->comments;
    }

    public function countComments() {
        return count($this->getComments());
    }

    /**
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param string $venue
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }
}