<?php

namespace Connection\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user_profile")
 * @ORM\Entity
 */
class Profile
{
//"divorced", "widowed", widow or widower, "cohabiting", "civil union", "domestic partnership" and "unmarried partners"
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Gender", inversedBy="profile")
     * @ORM\JoinColumn(name="gender", referencedColumnName="id")
     **/
    protected $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    protected $birthdate;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Gender", inversedBy="seek")
     * @ORM\JoinColumn(name="seek", referencedColumnName="id")
     **/
    protected $seek;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\LookingFor", inversedBy="profile")
     * @ORM\JoinColumn(name="looking_for", referencedColumnName="id")
     **/
    protected $lookingFor;

    /**
     * @Assert\NotNull(groups={"profile"})
     * @ORM\ManyToOne(targetEntity="Connection\CoreBundle\Entity\Country", inversedBy="profile")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     **/
    protected $country;

    /**
     * @Assert\NotNull(groups={"profile"})
     * @ORM\ManyToOne(targetEntity="Connection\CoreBundle\Entity\State", inversedBy="profile")
     * @ORM\JoinColumn(name="state", referencedColumnName="id")
     **/
    protected $state;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Education", inversedBy="profile")
     * @ORM\JoinColumn(name="education", referencedColumnName="id")
     **/
    protected $education;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Profession", inversedBy="profile")
     * @ORM\JoinColumn(name="profession", referencedColumnName="id")
     **/
    protected $profession;

    /**
     * @var integer
     *
     * @ORM\Column(name="income", type="integer", nullable=true)
     */
    protected $income;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Religion", inversedBy="profile")
     * @ORM\JoinColumn(name="religion", referencedColumnName="id")
     **/
    protected $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=50, nullable=true)
     */
    protected $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=50, nullable=true)
     */
    protected $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="interests_and_hobbies", type="string", length=600, nullable=true)
     */
    protected $interestsAndHobbies;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\MaritalStatus", inversedBy="profile")
     * @ORM\JoinColumn(name="marital_status", referencedColumnName="id")
     **/
    protected $maritalStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    protected $height;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    protected $weight;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\EyeColor", inversedBy="profile")
     * @ORM\JoinColumn(name="eye_color", referencedColumnName="id")
     **/
    protected $eyeColor;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\HairColor", inversedBy="profile")
     * @ORM\JoinColumn(name="hair_color", referencedColumnName="id")
     **/
    protected $hairColor;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Smoking", inversedBy="profile")
     * @ORM\JoinColumn(name="smoking", referencedColumnName="id")
     **/
    protected $smoking;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Drinking", inversedBy="profile")
     * @ORM\JoinColumn(name="drinking", referencedColumnName="id")
     **/
    protected $drinking;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\HaveChildren", inversedBy="profile")
     * @ORM\JoinColumn(name="have_children", referencedColumnName="id")
     **/
    protected $haveChildren;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\WantChildren", inversedBy="profile")
     * @ORM\JoinColumn(name="want_children", referencedColumnName="id")
     **/
    protected $wantChildren;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\LivesWithChildren", inversedBy="profile")
     * @ORM\JoinColumn(name="lives_wit_children", referencedColumnName="id")
     **/
    protected $livesWithChildren;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\OpenToPersonWithKids", inversedBy="profile")
     * @ORM\JoinColumn(name="open_to_person_with_kids", referencedColumnName="id")
     **/
    protected $openToPersonWithKids;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Ethnicity", inversedBy="profile")
     * @ORM\JoinColumn(name="ethnicity", referencedColumnName="id")
     **/
    protected $ethnicity;

    //    ToDo: Move to Social Entity
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
     * @var string
     *
     * @ORM\Column(name="twitter_id", type="string", length=255, nullable=true)
     */
    protected $twitterId;

    /**
     * @ORM\ManyToMany(targetEntity="Connection\CoreBundle\Entity\Language", inversedBy="profile")
     * @ORM\JoinTable(name="user_profile_language")
     **/
    protected $languages;

    /**
     * @var string
     * @ORM\Column(name="about_me", type="string", length=600, nullable=true)
     */
    protected $aboutMe;

    /**
     * @ORM\OneToOne(targetEntity="Connection\UserBundle\Entity\User", inversedBy="profile")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     **/
    private $user;

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
     * @param string $aboutMe
     */
    public function setAboutMe ( $aboutMe )
    {
        $this->aboutMe = $aboutMe;
    }

    /**
     * @return string
     */
    public function getAboutMe ()
    {
        return $this->aboutMe;
    }

    /**
     * @return int
     */
    public function getAge ()
    {
        if ( !$this->getBirthdate() instanceof \DateTime ) {
            return false;
        }
        $dateTime = new \DateTime($this->getBirthdate());
        return $dateTime->diff(new \DateTime())->y;
    }

    /**
     * @param \Connection\UserBundle\Entity\DateTime $birthdate
     */
    public function setBirthdate ( $birthdate )
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return \Connection\UserBundle\Entity\DateTime
     */
    public function getBirthdate ()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $drinking
     */
    public function setDrinking ( $drinking )
    {
        $this->drinking = $drinking;
    }

    /**
     * @return mixed
     */
    public function getDrinking ()
    {
        return $this->drinking;
    }

    /**
     * @param mixed $education
     */
    public function setEducation ( $education )
    {
        $this->education = $education;
    }

    /**
     * @return mixed
     */
    public function getEducation ()
    {
        return $this->education;
    }

    /**
     * @param mixed $ethnicity
     */
    public function setEthnicity ( $ethnicity )
    {
        $this->ethnicity = $ethnicity;
    }

    /**
     * @return mixed
     */
    public function getEthnicity ()
    {
        return $this->ethnicity;
    }

    /**
     * @param mixed $eyeColor
     */
    public function setEyeColor ( $eyeColor )
    {
        $this->eyeColor = $eyeColor;
    }

    /**
     * @return mixed
     */
    public function getEyeColor ()
    {
        return $this->eyeColor;
    }

    /**
     * @param mixed $gender
     */
    public function setGender ( $gender )
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender ()
    {
        return $this->gender;
    }

    /**
     * @param mixed $hairColor
     */
    public function setHairColor ( $hairColor )
    {
        $this->hairColor = $hairColor;
    }

    /**
     * @return mixed
     */
    public function getHairColor ()
    {
        return $this->hairColor;
    }

    /**
     * @param mixed $haveChildren
     */
    public function setHaveChildren ( $haveChildren )
    {
        $this->haveChildren = $haveChildren;
    }

    /**
     * @return mixed
     */
    public function getHaveChildren ()
    {
        return $this->haveChildren;
    }

    /**
     * @param int $height
     */
    public function setHeight ( $height )
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight ()
    {
        return $this->height;
    }

    /**
     * @param int $income
     */
    public function setIncome ( $income )
    {
        $this->income = $income;
    }

    /**
     * @return int
     */
    public function getIncome ()
    {
        return $this->income;
    }

    /**
     * @param string $interestsAndHobbies
     */
    public function setInterestsAndHobbies ( $interestsAndHobbies )
    {
        $this->interestsAndHobbies = $interestsAndHobbies;
    }

    /**
     * @return string
     */
    public function getInterestsAndHobbies ()
    {
        return $this->interestsAndHobbies;
    }

    /**
     * @param mixed $languages
     */
    public function setLanguages ( $languages )
    {
        $this->languages = $languages;
    }

    /**
     * @return mixed
     */
    public function getLanguages ()
    {
        return $this->languages;
    }

    /**
     * @param mixed $livesWithChildren
     */
    public function setLivesWithChildren ( $livesWithChildren )
    {
        $this->livesWithChildren = $livesWithChildren;
    }

    /**
     * @return mixed
     */
    public function getLivesWithChildren ()
    {
        return $this->livesWithChildren;
    }

    /**
     * @param mixed $maritalStatus
     */
    public function setMaritalStatus ( $maritalStatus )
    {
        $this->maritalStatus = $maritalStatus;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus ()
    {
        return $this->maritalStatus;
    }

    /**
     * @param string $mobile
     */
    public function setMobile ( $mobile )
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getMobile ()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $openToPersonWithKids
     */
    public function setOpenToPersonWithKids ( $openToPersonWithKids )
    {
        $this->openToPersonWithKids = $openToPersonWithKids;
    }

    /**
     * @return mixed
     */
    public function getOpenToPersonWithKids ()
    {
        return $this->openToPersonWithKids;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession ( $profession )
    {
        $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getProfession ()
    {
        return $this->profession;
    }

    /**
     * @param mixed $religion
     */
    public function setReligion ( $religion )
    {
        $this->religion = $religion;
    }

    /**
     * @return mixed
     */
    public function getReligion ()
    {
        return $this->religion;
    }

    /**
     * @param mixed $seek
     */
    public function setSeek ( $seek )
    {
        $this->seek = $seek;
    }

    /**
     * @return mixed
     */
    public function getSeek ()
    {
        return $this->seek;
    }

    /**
     * @param mixed $lookingFor
     */
    public function setLookingFor($lookingFor)
    {
        $this->lookingFor = $lookingFor;
    }

    /**
     * @return mixed
     */
    public function getLookingFor()
    {
        return $this->lookingFor;
    }

    /**
     * @param mixed $smoking
     */
    public function setSmoking ( $smoking )
    {
        $this->smoking = $smoking;
    }

    /**
     * @return mixed
     */
    public function getSmoking ()
    {
        return $this->smoking;
    }

    /**
     * @param mixed $state
     */
    public function setState ( $state )
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState ()
    {
        return $this->state;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone ( $telephone )
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getTelephone ()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $user
     */
    public function setUser ( $user )
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
     * @param mixed $wantChildren
     */
    public function setWantChildren ( $wantChildren )
    {
        $this->wantChildren = $wantChildren;
    }

    /**
     * @return mixed
     */
    public function getWantChildren ()
    {
        return $this->wantChildren;
    }

    /**
     * @param int $weight
     */
    public function setWeight ( $weight )
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight ()
    {
        return $this->weight;
    }

    /**
     * @param string $amazonId
     */
    public function setAmazonId ( $amazonId )
    {
        $this->amazonId = $amazonId;
    }

    /**
     * @return string
     */
    public function getAmazonId ()
    {
        return $this->amazonId;
    }

    /**
     * @param string $facebookId
     */
    public function setFacebookId ( $facebookId )
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return string
     */
    public function getFacebookId ()
    {
        return $this->facebookId;
    }

    /**
     * @param string $googleId
     */
    public function setGoogleId ( $googleId )
    {
        $this->googleId = $googleId;
    }

    /**
     * @return string
     */
    public function getGoogleId ()
    {
        return $this->googleId;
    }

    /**
     * @param string $twitterId
     */
    public function setTwitterId ( $twitterId )
    {
        $this->twitterId = $twitterId;
    }

    /**
     * @return string
     */
    public function getTwitterId ()
    {
        return $this->twitterId;
    }

    public function setSocialId($fieldName, $fieldValue) {
        if ( !property_exists($this, $fieldName) ) {
            throw new \Exception("Unrecognized Field {$fieldName}");
        }

        $this->$fieldName = $fieldValue;
    }
}
