<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Ikenna Ohuka <ohukaiv@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

// config for Sirval/Gemspay
return [
     /**
     * Public Key From Gemspay Dashboard
     *
     */
    'publicKey' => getenv('GEMSPAY_PUBLIC_KEY'),

    /**
     * Secret Key From Gemspay Dashboard
     *
     */
    'secretKey' => getenv('GEMSPAY_SECRET_KEY'),

    /**
     * Gemspay Payment URL
     *
     */
    'paymentUrl' => getenv('GEMSPAY_PAYMENT_URL'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => getenv('MERCHANT_EMAIL'),

];
