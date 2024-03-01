<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Ikenna Ohuka <ohukaiv@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Sirval\Gemspay\Facades;

use Illuminate\Support\Facades\Facade;

class Gemspay extends Facade
{
    /**
     * Get the registered name of the package
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-gemspay';
    }
}
