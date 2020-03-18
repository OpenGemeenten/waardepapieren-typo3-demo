<?php
$EM_CONF['site'] = [
    'title' => 'Site',
    'description' => 'Basic configuration and helpers for a website',
    'category' => 'fe',
    'version' => '0.0.1',
    'state' => 'alpha',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => false,
    'author' => 'OpenGemeenten',
    'author_email' => 'support@simplyadmire.com',
    'author_company' => 'SimplyAdmire',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
