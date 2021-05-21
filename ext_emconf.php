<?php
$EM_CONF['list_unsubscribe_header'] = [
    'title' => 'Direct Mail List-Unsubscribe Header',
    'description' => 'Extension for Direct Mail to set List-Unsubscribe Header.',
    'category' => 'plugin',
    'author' => 'Sebastian Brosch',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.0.0-11.99.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'ListUnsubscribeHeader\\' => 'Classes',
        ],
    ],
];