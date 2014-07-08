<?php

namespace Connection\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserImage
 *
 * @ORM\Table(name="user_image")
 * @ORM\Entity
 */
class UserImage
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
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumn(name="image", referencedColumnName="id")
     * @ORM\Column(name="image", type="bigint")
     */
    private $imageId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_main", type="boolean")
     */
    private $isMain;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="images")
     * @ORM\JoinColumn(name="user", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @var Image
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumn(name="image", referencedColumnName="id", onDelete="CASCADE")
     */
    private $image;

    public function __construct($userId, $imageId)
    {
        $this->userId = $userId;
        $this->imageId = $imageId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return UserImage
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
     * Set imageId
     *
     * @param integer $imageId
     * @return UserImage
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * Get imageId
     *
     * @return integer
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set isMain
     *
     * @param boolean $isMain
     * @return UserImage
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
     * @return UserImage
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
     * Set image
     *
     * @param \Connection\CoreBundle\Entity\Image $image
     * @return UserImage
     */
    public function setImage(\Connection\CoreBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Connection\CoreBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
