<?php

namespace Connection\UserBundle\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Connection\UserBundle\Entity\Profile\ImageRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Image
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
     * @ORM\ManyToOne(targetEntity="Connection\UserBundle\Entity\Profile\Gallery", inversedBy="images")
     * @ORM\JoinColumn(name="gallery", referencedColumnName="id")
     **/
    private $gallery;


    /**
     * @ORM\OneToOne(targetEntity="Connection\EventBundle\Entity\Event", mappedBy="image")
     **/
    private $event;


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
     * @return Image
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
     * @return Image
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
     * @param mixed $gallery
     */
    public function setGallery ( $gallery )
    {
        $this->gallery = $gallery;
    }

    /**
     * @return mixed
     */
    public function getGallery ()
    {
        return $this->gallery;
    }

    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../../web' . $this->getPath();
    }

    public function getAbsoluteDir()
    {
        return "http://".$_SERVER['HTTP_HOST'] . $this->getPath();
    }

    /**
     * @ORM\PreRemove()
     */
    public function removeFiles() {
        $imagePath = $this->getUploadRootDir();
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
        $dirParts = explode('/', $imagePath);
        unset($dirParts[count($dirParts)-1]);
        $dirPath = join('/', $dirParts);
        if(is_dir($dirPath)){
            if(count(glob($dirPath."/*")) === 0){
                rmdir($dirPath);
            }
        }
    }

    /**
     * @param mixed $event
     */
    public function setEvent ( $event )
    {
        $this->event = $event;
    }

    /**
     * @return mixed
     */
    public function getEvent ()
    {
        return $this->event;
    }
}
