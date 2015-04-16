<?php

namespace Connection\UserBundle\Validator\Constraints;
use Symfony\Component\Validator\Constraint;

class BirthDay extends Constraint
{
    public $message = 'Sorry, You are very small.';

    public $minAge = 16;
}
