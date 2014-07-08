<?php

namespace Connection\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ConnectionUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
