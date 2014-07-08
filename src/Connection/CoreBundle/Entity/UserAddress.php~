<?php

namespace Connection\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAddress
 *
 * @ORM\Table(name="user_address")
 * @ORM\Entity
 */
class UserAddress
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="user", type="bigint")
     */
    private $userId;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="address", type="bigint")
     */
    private $addressId;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="addresses")
     * @ORM\JoinColumn(name="user", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @var Address
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="address", referencedColumnName="id", onDelete="CASCADE")
     */
    private $address;

    /**
     * Set user
     *
     * @param integer $user
     * @return UserAddress
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set address
     *
     * @param integer $address
     * @return UserAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return integer
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return UserAddress
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
     * Set addressId
     *
     * @param integer $addressId
     * @return UserAddress
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }
}
