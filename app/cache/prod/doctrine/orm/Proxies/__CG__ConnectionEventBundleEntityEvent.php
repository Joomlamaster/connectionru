<?php

namespace Proxies\__CG__\Connection\EventBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \Connection\EventBundle\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'category', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'country', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'state', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'contactName', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'eventDate', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'email', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'phone', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'title', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'venue', 'createdAt', 'updatedAt', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'lat', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'lng', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'user', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'viewed', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'participants', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'interesteds', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'image', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'comments');
        }

        return array('__isInitialized__', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'category', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'country', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'state', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'contactName', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'eventDate', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'email', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'phone', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'title', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'venue', 'createdAt', 'updatedAt', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'lat', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'lng', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'user', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'viewed', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'participants', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'interesteds', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'image', '' . "\0" . 'Connection\\EventBundle\\Entity\\Event' . "\0" . 'comments');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', array($country));

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', array());

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactName($contactName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactName', array($contactName));

        return parent::setContactName($contactName);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactName', array());

        return parent::getContactName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventDate($eventDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventDate', array($eventDate));

        return parent::setEventDate($eventDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventDate', array());

        return parent::getEventDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipCode($zipCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipCode', array($zipCode));

        return parent::setZipCode($zipCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipCode', array());

        return parent::getZipCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array());

        return parent::setCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array());

        return parent::setUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLat($lat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLat', array($lat));

        return parent::setLat($lat);
    }

    /**
     * {@inheritDoc}
     */
    public function getLat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLat', array());

        return parent::getLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setLng($lng)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLng', array($lng));

        return parent::setLng($lng);
    }

    /**
     * {@inheritDoc}
     */
    public function getLng()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLng', array());

        return parent::getLng();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Connection\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function incViewed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incViewed', array());

        return parent::incViewed();
    }

    /**
     * {@inheritDoc}
     */
    public function getViewed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewed', array());

        return parent::getViewed();
    }

    /**
     * {@inheritDoc}
     */
    public function setParticipant(\Connection\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParticipant', array($user));

        return parent::setParticipant($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipants', array());

        return parent::getParticipants();
    }

    /**
     * {@inheritDoc}
     */
    public function hasParticipant(\Connection\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasParticipant', array($user));

        return parent::hasParticipant($user);
    }

    /**
     * {@inheritDoc}
     */
    public function countParticipants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countParticipants', array());

        return parent::countParticipants();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterested(\Connection\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterested', array($user));

        return parent::setInterested($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getInteresteds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInteresteds', array());

        return parent::getInteresteds();
    }

    /**
     * {@inheritDoc}
     */
    public function hasInterested(\Connection\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasInterested', array($user));

        return parent::hasInterested($user);
    }

    /**
     * {@inheritDoc}
     */
    public function countInteresteds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countInteresteds', array());

        return parent::countInteresteds();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageEvent', array());

        return parent::setImageEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setComments($comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComments', array($comments));

        return parent::setComments($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', array());

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function countComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countComments', array());

        return parent::countComments();
    }

    /**
     * {@inheritDoc}
     */
    public function getVenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVenue', array());

        return parent::getVenue();
    }

    /**
     * {@inheritDoc}
     */
    public function setVenue($venue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVenue', array($venue));

        return parent::setVenue($venue);
    }

}
