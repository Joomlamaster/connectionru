<?php

namespace Connection\UserBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Connection\UserBundle\Validator\Constraints\DateTime;

class DateTimeValidator extends ConstraintValidator
{
    public $formats = array(
        'd-m-Y',
        'd/m/Y'
    );

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        $r =1;

        if (null === $value || '' === $value) {
            return;
        }

        if (empty($this->formats)) {
            return;
        }

        $value = (string) $value;

        $bIsset = false;

        foreach ($this->formats as $f) {
            if ($this->getDate($value, $f)) {
                $bIsset = true;
                break;
            }
        }
        if (!$bIsset) {
            $this->buildViolation($constraint->message)
                ->setParameter('{{ date }}', $this->formatValue($value))
                ->addViolation();
        }

    }

    public function getDate ($value, $format) {
        $date = \DateTime::createFromFormat($format, $value);
        $lastRes = \DateTime::getLastErrors();
        if ($lastRes['warning_count'] != 0 || $lastRes['error_count'] != 0) {
            return false;
        }
        return $date;
    }


}
