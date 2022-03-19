<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [

        'en' => [
            'name' => 'English',
            'locale' => 'en_US',
            'url' => env('APP_URL').'/en/',
            'attributes' => [
                'abbreviation' => 'EN',
            ],
        ],

        'sk' => [
            'name' => 'Slovak',
            'locale' => 'sk_SK',
            'url' => env('APP_URL').'/',
            'attributes' => [
                'abbreviation' => 'SK',
            ],
        ],

    ],
];
