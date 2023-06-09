<?php

/**
 * Extension Manager/Repository config file for ext "market".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'market',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Web7\\Market\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'catalin',
    'author_email' => 'catalin.jumiga@mail.ru',
    'author_company' => 'web7',
    'version' => '1.0.0',
];
