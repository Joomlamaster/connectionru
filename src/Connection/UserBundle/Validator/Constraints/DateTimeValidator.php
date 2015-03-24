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

        if ($date = $this->check($value, $this->formats[0])) {
            return $date;
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

    public function getDate (\DateTime $value, $format)
    {

        if ($date = $this->check($value, $format)) {
            return $date;
        }

        $date = \DateTime::createFromFormat($format, $value);
        $lastRes = \DateTime::getLastErrors();
        if ($lastRes['warning_count'] != 0 || $lastRes['error_count'] != 0) {
            return false;
        }
        return $date;
    }

    private function check ($value, $format) {
        if (null === $value || '' === $value || empty($value)) {
            return true;
        }

        if (empty($format)) {
            return true;
        }

        if (is_object($value)) {
            $ts = $value->getTimestamp();
            $date = date($format, $ts);
            return $date;
        }

        return false;
    }


}
