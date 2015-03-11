<?php

namespace Connection\UserBundle\Validator\Constraints;
use Symfony\Component\Validator\Constraint;

class ConstraintDate extends Constraint
{
    public $message = 'The date "%string%" is not correct.';
}
