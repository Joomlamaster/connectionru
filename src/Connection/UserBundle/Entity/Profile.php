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
 * @ORM\HasLifecycleCallbacks()
 *
 */
class Profile
{
    public static $noAvatar =  "/bundles/connectionuser/img/noAvatar.jpg";
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
     * @ORM\ManyToMany(targetEntity="Connection\UserBundle\Entity\Profile\LookingFor", inversedBy="profile")
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
     * @ORM\ManyToOne(targetEntity="Connection\CoreBundle\Entity\Country", inversedBy="profile")
     * @ORM\JoinColumn(name="originally_from", referencedColumnName="id")
     **/
    protected $originallyFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="originally_from_city", type="string", length=50, nullable=true)
     */
    protected $originallyFromCity;

    /**
     * @Assert\NotNull(groups={"profile"})
     * @ORM\ManyToOne(targetEntity="Connection\CoreBundle\Entity\State", inversedBy="profile")
     * @ORM\JoinColumn(name="state", referencedColumnName="id")
     **/
    protected $state;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=true)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=50, nullable=true)
     */
    protected $zip;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Education", inversedBy="profile")
     * @ORM\JoinColumn(name="education", referencedColumnName="id")
     **/
    protected $education;

    /**
     * @var boolean
     *
     * @ORM\Column(name="education_ivy_league", type="boolean", nullable=true)
     */
    protected $educationIvyLeague = false;

    /**
     * @var string
     *
     * @ORM\Column(name="ivy_League_university", type="string", length=255, nullable=true)
     */
    protected $ivyLeagueUniversity;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Profession", inversedBy="profile")
     * @ORM\JoinColumn(name="profession", referencedColumnName="id", nullable=true)
     **/
    protected $profession;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Income", inversedBy="profile")
     * @ORM\JoinColumn(name="income", referencedColumnName="id", nullable=true)
     **/
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
     * @ORM\Column(name="interests_and_hobbies", type="string", length=1000, nullable=true)
     * @Assert\Length(
     *      groups={"profile"},
     *      min = 3,
     *      max = 1000,
     *      minMessage = "This field must be at least 3 characters length",
     *      maxMessage = "This field cannot be longer than 1000 characters length"
     * )
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
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\BodyType", inversedBy="profile")
     * @ORM\JoinColumn(name="body_type", referencedColumnName="id")
     **/
    protected $bodyType;

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
     * @ORM\Column(name="about_me", type="string", length=1000, nullable=true)
     * @Assert\Length(
     *      groups={"profile"},
     *      min = 3,
     *      max = 1000,
     *      minMessage = "This field must be at least 3 characters length",
     *      maxMessage = "This field cannot be longer than 1000 characters length"
     * )
     */
    protected $aboutMe;

    /**
     * @var string
     * @ORM\Column(name="looking_for_description", type="string", length=1000, nullable=true)
     * @Assert\Length(
     *      groups={"profile"},
     *      min = 3,
     *      max = 1000,
     *      minMessage = "This field must be at least 3 characters length",
     *      maxMessage = "This field cannot be longer than 1000 characters length"
     * )
     */
    protected $lookingForDescription;

    /**
     * @ORM\OneToOne(targetEntity="Connection\UserBundle\Entity\User", inversedBy="profile")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     **/
    private $user;

    /**
     * @var string
     * @ORM\Column(name="avatar", type="string", length=200, nullable=true)
     */
    protected $avatar;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Zodiac", inversedBy="profile")
     * @ORM\JoinColumn(name="zodiac", referencedColumnName="id")
     **/
    protected $zodiac;

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
     * @param mixed $originallyFrom
     */
    public function setOriginallyFrom ( $originallyFrom )
    {
        $this->originallyFrom = $originallyFrom;
    }

    /**
     * @return mixed
     */
    public function getOriginallyFrom ()
    {
        return $this->originallyFrom;
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
     * @param \DateTime $birthdate
     */
    public function setBirthdate ( $birthdate )
    {
//        ToDo: Refactor This code, HotFixed!
        if ($birthdate instanceof DateTime) {
            $this->birthdate = $birthdate;
        } else {
            try {
                $date = explode("-",$birthdate);
                $this->birthdate = new \DateTime("$date[2]-$date[0]-$date[1]");
            } catch (\Exception $e) {
                $this->birthdate = new \DateTime();
            }
        }
    }

    /**
     * @return \DateTime
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
    public function getEducationIvyLeague ()
    {
        return $this->educationIvyLeague;
    }

    /**
     * @param mixed $educationIvyLeague
     */
    public function setEducationIvyLeague ( $educationIvyLeague )
    {
        $this->educationIvyLeague = $educationIvyLeague;
    }

    /**
     * @return mixed
     */
    public function getIvyLeagueUniversity ()
    {
        return $this->ivyLeagueUniversity;
    }

    /**
     * @param mixed $educationIvyLeague
     */
    public function setIvyLeagueUniversity ( $ivyLeagueUniversity )
    {
        $this->ivyLeagueUniversity = $ivyLeagueUniversity;
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
     * @param mixed $bodyType
     */
    public function setBodyType ( $bodyType )
    {
        $this->bodyType = $bodyType;
    }

    /**
     * @return mixed
     */
    public function getBodyType ()
    {
        return $this->bodyType;
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

    /**
     * @param string $avatar
     */
    public function setAvatar ( $avatar )
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string
     */
    public function getAvatar ()
    {
        $webRoot = __DIR__.'/../../../../web';
        if(is_file($webRoot.$this->avatar)){
            return $this->avatar;
        }
        return self::$noAvatar;
    }

    /**
     * @return bool
     */
    public function hasAvatar()
    {
        return !empty($this->avatar);
    }

    /**
     * @param string $zodiac
     */
    public function setZodiac ( $zodiac )
    {
        $this->zodiac = $zodiac;
    }

    /**
     * @return string
     */
    public function getZodiac ()
    {
        return $this->zodiac;
    }

    /**
     * @param string $lookingForDescription
     */
    public function setLookingForDescription ( $lookingForDescription )
    {
        $this->lookingForDescription = $lookingForDescription;
    }

    /**
     * @return string
     */
    public function getLookingForDescription ()
    {
        return $this->lookingForDescription;
    }

    /**
     * @param string $city
     */
    public function setCity ( $city )
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity ()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setOriginallyFromCity ( $city )
    {
        $this->originallyFromCity = $city;
    }

    /**
     * @return string
     */
    public function getOriginallyFromCity ()
    {
        return $this->originallyFromCity;
    }

    /**
     * @param string $zip
     */
    public function setZip ( $zip )
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getZip ()
    {
        return $this->zip;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function prePersist(){
        //if not IvyLeagueEducated remove IvyLeagueUniversity
        $ivyLeagueEducation = $this->getEducationIvyLeague();
        if(empty($ivyLeagueEducation)){
            $this->ivyLeagueUniversity = null;
        }
    }
}
