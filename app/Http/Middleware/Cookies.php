<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\Cookies as Middleware;

class Cookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
