<?php
// src/Acme/MessageBundle/Entity/MessageMetadata.php

namespace Connection\MessageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\MessageMetadata as BaseMessageMetadata;

/**
 * @ORM\Table(name="message_metadata")
 * @ORM\Entity
 */
class MessageMetadata extends BaseMessageMetadata
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *   targetEntity="Connection\MessageBundle\Entity\Message",
     *   inversedBy="metadata"
     * )
     * @var \FOS\MessageBundle\Model\MessageInterface
     */
    protected $message;

    /**
     * @ORM\ManyToOne(
     * targetEntity="Connection\UserBundle\Entity\User",
     * cascade={"remove"}
     * )
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $participant;
}