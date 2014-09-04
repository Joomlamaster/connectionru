<?php

// src/Acme/DemoBundle/Twig/AcmeExtension.php
namespace Connection\WebBundle\Twig;

class UserExtension extends \Twig_Extension
{
    private $converter;
    public function __construct($converter)
    {
        $this->converter = $converter;
    }
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('userAge', array($this, 'userAge')),
            new \Twig_SimpleFilter('userCountry', array($this, 'userCountry')),
            new \Twig_SimpleFilter('cmToFootViewFormat', array($this, 'cmToFootViewFormat')),
            new \Twig_SimpleFilter('cmViewFormat', array($this, 'cmViewFormat')),
        );
    }

    public function userAge($value)
    {
        if (empty($value)) {
            return "";
        }

        $now    = new \DateTime();
        $diff   = $now->diff($value);
        return $diff->y;
    }

    public function cmViewFormat($cm)
    {
        return $this->converter->cmViewFormat($cm);
    }

    public function cmToFootViewFormat($cm)
    {
        return $this->converter->footViewFormat($this->converter->cmToFoot($cm));
    }

    public function getName()
    {
        return 'user_extension';
    }
}