<?php

return [
    /*
    |--------------------------------------------------------------------------
    | merchantID
    |--------------------------------------------------------------------------
    |
    | merchantID must be 36 chars
    |
    */
    'merchantID' => env('ZARINPAL_MERCHANTID', 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'),

    /*
    |--------------------------------------------------------------------------
    | language
    |--------------------------------------------------------------------------
    |
    | Available languages: 'fa', 'en'
    |
    */
    'lang' => env('ZARINPAL_LANG', 'fa'),

    /*
    |--------------------------------------------------------------------------
    | sandbox
    |--------------------------------------------------------------------------
    |
    | true: '1', false: '0'
    |
    */
    'sandbox' => env('ZARINPAL_SANDBOX', '0'),

    /*
    |--------------------------------------------------------------------------
    | zaringate (more info: https://bit.ly/2Ukay07)
    |--------------------------------------------------------------------------
    |
    | true: '1', false: '0'
    |
    */
    'zaringate' => env('ZARINPAL_ZARINGATE', '0'),

    /*
    |--------------------------------------------------------------------------
    | zaringate PSPs (more info: https://bit.ly/2Ukay07)
    |--------------------------------------------------------------------------
    |
    | Available PSPs: 'Asan', 'Sep', 'Sad', 'Pec', 'Fan', 'Emz'
    |
    */
    'zaringate_psp' => env('ZARINPAL_ZARINGATE_PSP', ''),

];
