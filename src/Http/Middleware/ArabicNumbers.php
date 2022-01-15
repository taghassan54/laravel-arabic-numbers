<?php

namespace TagHassan54\ArabicNumbers\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class ArabicNumbers extends TransformsRequest
{
    /**
     * The attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * Transform the given value.
     *
     * @param  string $key
     * @param  mixed $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
        if ((! is_string($value)) || in_array($key, $this->except, true)) {
            return $value;
        }

        $eastern = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $western = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($eastern, $western, $value);
    }
}