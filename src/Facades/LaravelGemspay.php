<?php

namespace Sirval\LaravelGemspay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sirval\LaravelGemspay\LaravelGemspay
 */
class LaravelGemspay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sirval\LaravelGemspay\LaravelGemspay::class;
    }
}
