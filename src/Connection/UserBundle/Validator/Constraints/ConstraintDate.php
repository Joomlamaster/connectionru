<?php

namespace Connection\UserBundle\Validator\Constraints;
use Symfony\Component\Validator\Constraint;

class DateTime extends Constraint
{
    public $message = 'The date {{ date }} is not a valid date.';
}
