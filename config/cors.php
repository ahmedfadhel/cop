<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */

    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    // 'allowedOriginsPatterns' => [],
    'allow_headers' => [
      'Content-Type',
      'X-Auth-Token',
      'Origin',
      'Authorization',
      'X-CSRF-Token'
      ],
    'allowedMethods' => ['GET', 'POST', 'PUT','Delete'],
    'exposedHeaders' => [],
    'maxAge' => 0,

];
