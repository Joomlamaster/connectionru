<?php

namespace Connection\UserBundle\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Religion
 *
 * @ORM\Table(name="user_religion")
 * @ORM\Entity
 */
class Religion
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="Connection\UserBundle\Entity\Profile", mappedBy="religion")
     */
    private $profile;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="priority", type="integer", nullable=true)
	 */
	private $priority;

    /**
     * @return int
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName ( $name )
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName ()
    {
        return $this->name;
    }

	/**
	 * @return int
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * @param int $priority
	 */
	public function setPriority( $priority ) {
		$this->priority = $priority;
	}

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $profile
     */
    public function setProfile ( $profile )
    {
        $this->profile = $profile;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getProfile ()
    {
        return $this->profile;
    }
}
