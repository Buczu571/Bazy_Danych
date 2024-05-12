<?php

return [

    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'), // Używaj MAIL_USERNAME zamiast bezpośredniego przypisania do wartości
            'password' => env('MAIL_PASSWORD'), // Używaj MAIL_PASSWORD zamiast bezpośredniego przypisania do wartości
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'pociagex@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

];
