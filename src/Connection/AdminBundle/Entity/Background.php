<?php

namespace Connection\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Background
 *
 * @ORM\Table(name="admin_settings_background")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Background
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean")
     */
    private $isDefault = 0;


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
     * Set name
     *
     * @param string $name
     * @return Background
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Background
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param boolean $isDefault
     */
    public function setIsDefault ( $isDefault )
    {
        $this->isDefault = $isDefault;
    }

    /**
     * @return boolean
     */
    public function getIsDefault ()
    {
        return $this->isDefault;
    }

    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../web' . $this->getPath();
    }

    public function getAbsoluteDir()
    {
        return "http://".$_SERVER['HTTP_HOST'] . $this->getPath();
    }

    /**
     * @ORM\PreRemove()
     */
    public function removeFiles() {
        unlink($this->getUploadRootDir());
    }
}
