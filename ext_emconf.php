<?php

$EM_CONF['empty_image_alt_finder'] = [
    'title' => 'Empty Image Alt Finder',
    'description' => 'Helps editors to find empty or missing image alt attributes.',
    'category' => 'templates',
    'version' => '1.0.1',
    'state' => 'stable',
    'author' => 'Michael Hitzler',
    'author_email' => 'mail@paravista.de',
    'author_company' => 'paravista media',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
