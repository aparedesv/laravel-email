<?php

namespace Andreu\laravelMail\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelMail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelMail';
    }
}