<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ["POST, GET, OPTIONS, DELETE, PUT"],

    'allowed_origins' => ["http://localhost:4200"],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ["X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding"],

    'exposed_headers' => [],

    'max_age' => "1000",

    'supports_credentials' => false,

];
