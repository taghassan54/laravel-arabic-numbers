<?php

namespace TagHassan54\ArabicNumbers\Test;

use TagHassan54\ArabicNumbers\Http\Middleware\ArabicNumbers;

class TestMiddleware extends ArabicNumbers
{
    /**
     * The attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password'
    ];
}