<?php

namespace Connection\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
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
     *
     * @ORM\Column(name="password_confirmation_token", type="string", length=255)
     */
    protected $passwordConfirmationToken;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50)
     * @Assert\NotBlank(message="Please enter your first name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *      min=3,
     *      max=50,
     *      minMessage="First name is too short",
     *      maxMessage="First name is too long",
     *      groups={"Registration", "Profile"}
     * )
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50)
     * @Assert\NotBlank(message="Please enter your last name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *      min=3,
     *      max=50,
     *      minMessage="Last name is too short",
     *      maxMessage="Last name is too long",
     *      groups={"Registration", "Profile"}
     * )
     */
    protected $lastName;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="smallint")
     */
    protected $gender;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    protected $birthdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    protected $age;

    /**
     * @var integer
     *
     * @ORM\Column(name="seek", type="smallint")
     */
    protected $seek;

    /**
     * @var integer
     *
     * @ORM\Column(name="looking_for", type="integer")
     */
    protected $lookingFor;

    /**
     * @var integer
     *
     * @ORM\Column(name="originally_from", type="bigint")
     */
    protected $originallyFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="education", type="integer")
     */
    protected $education;

    /**
     * @var integer
     *
     * @ORM\Column(name="profession", type="integer")
     */
    protected $profession;

    /**
     * @var integer
     *
     * @ORM\Column(name="income", type="integer")
     */
    protected $income;

    /**
     * @var integer
     *
     * @ORM\Column(name="religion", type="integer")
     */
    protected $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=50)
     */
    protected $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=50)
     */
    protected $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="interests_and_hobbies", type="string", length=600)
     */
    protected $interestsAndHobbies;

    /**
     * @var integer
     *
     * @ORM\Column(name="marital_status", type="integer")
     */
    protected $maritalStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer")
     */
    protected $height;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer")
     */
    protected $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="eye_color", type="integer")
     */
    protected $eyeColor;

    /**
     * @var integer
     *
     * @ORM\Column(name="hair_color", type="integer")
     */
    protected $hairColor;

    /**
     * @var integer
     *
     * @ORM\Column(name="smoking", type="integer")
     */
    protected $smoking;

    /**
     * @var integer
     *
     * @ORM\Column(name="drinking", type="integer")
     */
    protected $drinking;

    /**
     * @var integer
     *
     * @ORM\Column(name="have_children", type="integer")
     */
    protected $haveChildren;

    /**
     * @var integer
     *
     * @ORM\Column(name="want_children", type="integer")
     */
    protected $wantChildren;

    /**
     * @var integer
     *
     * @ORM\Column(name="lives_with_children", type="integer")
     */
    protected $livesWithChildren;

    /**
     * @var integer
     *
     * @ORM\Column(name="open_to_person_with_kids", type="integer")
     */
    protected $openToPersonWithKids;

    /**
     * @var integer
     *
     * @ORM\Column(name="ethnicity", type="integer")
     */
    protected $ethnicity;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="last_login", type="datetime")
     */
    //protected $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="amazon_id", type="string", length=255, nullable=true)
     */
    protected $amazonId;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    protected $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", length=255, nullable=true)
     */
    protected $googleId;

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
     * @var string
     *
     * @ORM\OneToMany(targetEntity="UserLanguage", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="about_me", type="string", length=600)
     */
    protected $aboutMe;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime")
     */
    protected $deletedAt;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="UserImage", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $images;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="UserAddress", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $addresses;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Event", mappedBy="user", cascade={"persist", "remove"})
     */
    protected $events;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->languages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set passwordConfirmationToken
     *
     * @param string $passwordConfirmationToken
     * @return User
     */
    public function setPasswordConfirmationToken($passwordConfirmationToken)
    {
        $this->passwordConfirmationToken = $passwordConfirmationToken;

        return $this;
    }

    /**
     * Get passwordConfirmationToken
     *
     * @return string 
     */
    public function getPasswordConfirmationToken()
    {
        return $this->passwordConfirmationToken;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set seek
     *
     * @param integer $seek
     * @return User
     */
    public function setSeek($seek)
    {
        $this->seek = $seek;

        return $this;
    }

    /**
     * Get seek
     *
     * @return integer 
     */
    public function getSeek()
    {
        return $this->seek;
    }

    /**
     * Set lookingFor
     *
     * @param integer $lookingFor
     * @return User
     */
    public function setLookingFor($lookingFor)
    {
        $this->lookingFor = $lookingFor;

        return $this;
    }

    /**
     * Get lookingFor
     *
     * @return integer 
     */
    public function getLookingFor()
    {
        return $this->lookingFor;
    }

    /**
     * Set originallyFrom
     *
     * @param integer $originallyFrom
     * @return User
     */
    public function setOriginallyFrom($originallyFrom)
    {
        $this->originallyFrom = $originallyFrom;

        return $this;
    }

    /**
     * Get originallyFrom
     *
     * @return integer 
     */
    public function getOriginallyFrom()
    {
        return $this->originallyFrom;
    }

    /**
     * Set education
     *
     * @param integer $education
     * @return User
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return integer 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set profession
     *
     * @param integer $profession
     * @return User
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return integer 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set income
     *
     * @param integer $income
     * @return User
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income
     *
     * @return integer 
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set religion
     *
     * @param integer $religion
     * @return User
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return integer 
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set interestsAndHobbies
     *
     * @param string $interestsAndHobbies
     * @return User
     */
    public function setInterestsAndHobbies($interestsAndHobbies)
    {
        $this->interestsAndHobbies = $interestsAndHobbies;

        return $this;
    }

    /**
     * Get interestsAndHobbies
     *
     * @return string 
     */
    public function getInterestsAndHobbies()
    {
        return $this->interestsAndHobbies;
    }

    /**
     * Set maritalStatus
     *
     * @param integer $maritalStatus
     * @return User
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return integer 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return User
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return User
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set eyeColor
     *
     * @param integer $eyeColor
     * @return User
     */
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    /**
     * Get eyeColor
     *
     * @return integer 
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * Set hairColor
     *
     * @param integer $hairColor
     * @return User
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    /**
     * Get hairColor
     *
     * @return integer 
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * Set smoking
     *
     * @param integer $smoking
     * @return User
     */
    public function setSmoking($smoking)
    {
        $this->smoking = $smoking;

        return $this;
    }

    /**
     * Get smoking
     *
     * @return integer 
     */
    public function getSmoking()
    {
        return $this->smoking;
    }

    /**
     * Set drinking
     *
     * @param integer $drinking
     * @return User
     */
    public function setDrinking($drinking)
    {
        $this->drinking = $drinking;

        return $this;
    }

    /**
     * Get drinking
     *
     * @return integer 
     */
    public function getDrinking()
    {
        return $this->drinking;
    }

    /**
     * Set haveChildren
     *
     * @param integer $haveChildren
     * @return User
     */
    public function setHaveChildren($haveChildren)
    {
        $this->haveChildren = $haveChildren;

        return $this;
    }

    /**
     * Get haveChildren
     *
     * @return integer 
     */
    public function getHaveChildren()
    {
        return $this->haveChildren;
    }

    /**
     * Set wantChildren
     *
     * @param integer $wantChildren
     * @return User
     */
    public function setWantChildren($wantChildren)
    {
        $this->wantChildren = $wantChildren;

        return $this;
    }

    /**
     * Get wantChildren
     *
     * @return integer 
     */
    public function getWantChildren()
    {
        return $this->wantChildren;
    }

    /**
     * Set livesWithChildren
     *
     * @param integer $livesWithChildren
     * @return User
     */
    public function setLivesWithChildren($livesWithChildren)
    {
        $this->livesWithChildren = $livesWithChildren;

        return $this;
    }

    /**
     * Get livesWithChildren
     *
     * @return integer 
     */
    public function getLivesWithChildren()
    {
        return $this->livesWithChildren;
    }

    /**
     * Set openToPersonWithKids
     *
     * @param integer $openToPersonWithKids
     * @return User
     */
    public function setOpenToPersonWithKids($openToPersonWithKids)
    {
        $this->openToPersonWithKids = $openToPersonWithKids;

        return $this;
    }

    /**
     * Get openToPersonWithKids
     *
     * @return integer 
     */
    public function getOpenToPersonWithKids()
    {
        return $this->openToPersonWithKids;
    }

    /**
     * Set ethnicity
     *
     * @param integer $ethnicity
     * @return User
     */
    public function setEthnicity($ethnicity)
    {
        $this->ethnicity = $ethnicity;

        return $this;
    }

    /**
     * Get ethnicity
     *
     * @return integer 
     */
    public function getEthnicity()
    {
        return $this->ethnicity;
    }

    /**
     * Set amazonId
     *
     * @param string $amazonId
     * @return User
     */
    public function setAmazonId($amazonId)
    {
        $this->amazonId = $amazonId;

        return $this;
    }

    /**
     * Get amazonId
     *
     * @return string 
     */
    public function getAmazonId()
    {
        return $this->amazonId;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set googleId
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;

        return $this;
    }

    /**
     * Get googleId
     *
     * @return string 
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * Set packetPlan
     *
     * @param integer $packetPlan
     * @return User
     */
    public function setPacketPlan($packetPlan)
    {
        $this->packetPlan = $packetPlan;

        return $this;
    }

    /**
     * Get packetPlan
     *
     * @return integer 
     */
    public function getPacketPlan()
    {
        return $this->packetPlan;
    }

    /**
     * Set packetActivated
     *
     * @param \DateTime $packetActivated
     * @return User
     */
    public function setPacketActivated($packetActivated)
    {
        $this->packetActivated = $packetActivated;

        return $this;
    }

    /**
     * Get packetActivated
     *
     * @return \DateTime 
     */
    public function getPacketActivated()
    {
        return $this->packetActivated;
    }

    /**
     * Set packetActive
     *
     * @param boolean $packetActive
     * @return User
     */
    public function setPacketActive($packetActive)
    {
        $this->packetActive = $packetActive;

        return $this;
    }

    /**
     * Get packetActive
     *
     * @return boolean 
     */
    public function getPacketActive()
    {
        return $this->packetActive;
    }

    /**
     * Set aboutMe
     *
     * @param string $aboutMe
     * @return User
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;

        return $this;
    }

    /**
     * Get aboutMe
     *
     * @return string 
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return User
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Add languages
     *
     * @param \Connection\CoreBundle\Entity\UserLanguage $languages
     * @return User
     */
    public function addLanguage(\Connection\CoreBundle\Entity\UserLanguage $languages)
    {
        $this->languages[] = $languages;

        return $this;
    }

    /**
     * Remove languages
     *
     * @param \Connection\CoreBundle\Entity\UserLanguage $languages
     */
    public function removeLanguage(\Connection\CoreBundle\Entity\UserLanguage $languages)
    {
        $this->languages->removeElement($languages);
    }

    /**
     * Get languages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Add images
     *
     * @param \Connection\CoreBundle\Entity\UserImage $images
     * @return User
     */
    public function addImage(\Connection\CoreBundle\Entity\UserImage $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Connection\CoreBundle\Entity\UserImage $images
     */
    public function removeImage(\Connection\CoreBundle\Entity\UserImage $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add addresses
     *
     * @param \Connection\CoreBundle\Entity\UserAddress $addresses
     * @return User
     */
    public function addAddress(\Connection\CoreBundle\Entity\UserAddress $addresses)
    {
        $this->addresses[] = $addresses;

        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \Connection\CoreBundle\Entity\UserAddress $addresses
     */
    public function removeAddress(\Connection\CoreBundle\Entity\UserAddress $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add events
     *
     * @param \Connection\CoreBundle\Entity\Event $events
     * @return User
     */
    public function addEvent(\Connection\CoreBundle\Entity\Event $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \Connection\CoreBundle\Entity\Event $events
     */
    public function removeEvent(\Connection\CoreBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }
}
