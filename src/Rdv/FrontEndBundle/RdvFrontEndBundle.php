<?php

namespace Rdv\FrontEndBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RdvFrontEndBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
