<?php
return [
    'mail' =>[
        'from'=>env('MAIL_USERNAME', 'none'),
        'company_name'=>"Techvoters News",
        'admin_email'=>env('MAIL_USERNAME', 'none'),
        'redirectOnSuccess'=>"https://www.google.com/",
    ],
    'Ligiscan' =>[
       'key'=>env('Ligiscan_key', 'none')
],
    'Official' =>[
        'key'=>env('Official_key', 'none')
    ],
    'Regulatinsgov' =>[
        'key'=>env('Regulatinsgov_key', 'none')
    ],
    'GoogleMap' =>[
        'key'=>env('Googlemap_key', 'none')
    ],
    'myapi' =>[
        'blackbookcloud_key'=>env('blackbookcloud_key', 'none')
    ]

];
