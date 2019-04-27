<?php

namespace LaraCrafts\Boilerplate\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Boilerplate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'boilerplate';
    }
}
