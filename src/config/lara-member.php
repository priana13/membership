<?php

namespace Priana\Membership\config;

return [
    'default_role' => 'member',

    'payment' => [
        'enabled' => true,

        'currency' => 'IDR',

        'default_payment_method' => 'bank_transfer',

        'payment_methods' => [

            'bank_transfer' => [    

                'name' => env('BANK_NAME' , 'Bank Mandiri'),

                'account_number' => env('BANK_ACCOUNT_NUMBER' , '002544xxxx'),

                'owner_name' => env('BANK_OWNER_NAME' , 'Your Company'),
                
            ],
            // Add more payment methods here
        ],
    ]


];
