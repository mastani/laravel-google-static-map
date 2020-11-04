<?php

namespace Mastani\GoogleStaticMap;

use Illuminate\Support\Facades\Facade;

class GoogleStaticMapFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'google-static-map';
    }
}
