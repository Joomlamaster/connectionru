<?php

namespace Connection\UserBundle\Service;

use Connection\UserBundle\Entity\User;
use Connection\UserBundle\Entity\Profile;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\DependencyInjection\Container;

class ConverterService {

    public function cmToFoot($cm)
    {
        if (empty($cm) || !is_numeric($cm)) {
            throw new \Exception('Cannot convert, invalid value');
        }

        return (($cm / 100) * 3.281);
    }

    public function footViewFormat($foot)
    {
        if (empty($foot) || !is_numeric($foot)) {
            throw new \Exception('Cannot format, invalid value');
        }

        $formatted = number_format($foot, 1, "'", '');
        return $formatted . '"';
    }

    public function cmViewFormat($cm)
    {
        if (empty($cm) || !is_numeric($cm)) {
            throw new \Exception('Cannot format, invalid value');
        }
        return $cm . ' cm';
    }

    public function dateToAge($date){
        if (empty($date)) {
            return "";
        }

        $now    = new \DateTime();
        $diff   = $now->diff($date);
        return $diff->y;
    }

    /**
     *
     * @param type $age
     * @param type $roudTo
     *     1 - first day of the year,
     *     2- last day of the year
     * @return \DateTime|string
     */
    public function ageToDate($age, $roundTo = false){
        if (empty($age)) {
            return "";
        }
        $date = new \DateTime('today -'.$age.' years');
        if($roundTo == 1){
            $date = new \DateTime($date->format('Y-01-01'));
        }
        else if($roundTo == 2){
            $date = new \DateTime($date->format('Y-12-31'));
        }
        return $date;
    }
}