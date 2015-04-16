<?php

namespace Connection\UserBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Connection\UserBundle\Validator\Constraints\DateTime;

class BirthDayValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        $interval = date_diff($value, date_create("now"));
        if ($interval->y < $constraint->minAge) {
            $this->buildViolation($constraint->message)
                ->addViolation();
        }

    }

    public function getDate ($value, $format)
    {
        $date = \DateTime::createFromFormat($format, $value);
        $lastRes = \DateTime::getLastErrors();
        if ($lastRes['warning_count'] != 0 || $lastRes['error_count'] != 0) {
            return false;
        }
        return $date;
    }


}
