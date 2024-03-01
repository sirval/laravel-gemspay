<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Ikenna Ohuka <ohukaiv@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

if (! function_exists('gemspay')) {
    function gemspay()
    {
        return app()->make('laravel-gemspay');
    }
}
