<?php

namespace Openbe\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OpenbeUserBundle extends Bundle
{
	public function getParent(){
        return 'FOSUserBundle';
    }
}
