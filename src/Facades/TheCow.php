<?php

namespace Hemilioaraujo\TheCow\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hemilioaraujo\TheCow\TheCow
 */
class TheCow extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hemilioaraujo\TheCow\TheCow::class;
    }
}
