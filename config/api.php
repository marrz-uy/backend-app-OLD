<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API specific config
    |--------------------------------------------------------------------------
    */
    // Default API user - mostly used for tests.
    'apiEmail' => env('API_USER_EMAIL'),
    'apiPassword' => env('API_USER_PASSWORD'),
    'api.apiPasswordConfirmation' => env('API_USER_PASSWORDCONFIRMATION'),
    'api.apiName' => env('API_USER_NAME'),
];
