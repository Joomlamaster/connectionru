<?php

namespace Connection\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserImage
 *
 * @ORM\Table(name="user_language")
 * @ORM\Entity
 */
class UserLanguage
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="user", type="bigint")
     *
     */
    private $userId;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumn(name="language", referencedColumnName="id")
     * @ORM\Column(name="language", type="integer")
     */
    private $languageId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_main", type="boolean")
     */
    private $isMain;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="languages")
     * @ORM\JoinColumn(name="user", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @var Language
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumn(name="language", referencedColumnName="id", onDelete="CASCADE")
     */
    private $language;



    /**
     * Set userId
     *
     * @param integer $userId
     * @return UserLanguage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     * @return UserLanguage
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer 
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set isMain
     *
     * @param boolean $isMain
     * @return UserLanguage
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;

        return $this;
    }

    /**
     * Get isMain
     *
     * @return boolean 
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * Set user
     *
     * @param \Connection\CoreBundle\Entity\User $user
     * @return UserLanguage
     */
    public function setUser(\Connection\CoreBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Connection\CoreBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set language
     *
     * @param \Connection\CoreBundle\Entity\Language $language
     * @return UserLanguage
     */
    public function setLanguage(\Connection\CoreBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \Connection\CoreBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
