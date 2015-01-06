<?php

namespace Connection\UserBundle\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="user_gallery")
 * @ORM\Entity(repositoryClass="Connection\UserBundle\Entity\Profile\GalleryRepository")
 */
class Gallery
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title = "Profile Images";
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile\Image", mappedBy="gallery", cascade={"persist", "remove"})
     */
    private $images;

    /**
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\User", inversedBy="galleries")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     **/
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean")
     */
    private $isDefault = false;


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
     * @param string $title
     */
    public function setTitle ( $title )
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $images
     */
    public function setImages ( $images )
    {
        $this->images = $images;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getImages ()
    {
        return $this->images;
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

    public function getDefault()
    {
        return $this->isDefault;
    }

    public function setDefault($default)
    {
        $this->isDefault = $default;
    }
}
