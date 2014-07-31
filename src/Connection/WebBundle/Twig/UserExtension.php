<?php

// src/Acme/DemoBundle/Twig/AcmeExtension.php
namespace Connection\WebBundle\Twig;

class UserExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('userAge', array($this, 'userAge')),
            new \Twig_SimpleFilter('userCountry', array($this, 'userCountry')),
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

    public function getName()
    {
        return 'user_extension';
    }
}