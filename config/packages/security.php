<?php

$configFilePath = __DIR__ . '/../../users.php';
if (file_exists($configFilePath)) {
    $user = require($configFilePath);
} else {
    $user = [];
}

$container->loadFromExtension('security', [
    'providers' => [
        'in_memory' => [
            'memory' => [
                'users' => $user
            ]
        ]
    ],
    'encoders' => [
        'Symfony\Component\Security\Core\User\User' => [
            'algorithm' => 'bcrypt'
        ]
    ],
    'firewalls' => [
        'dev' => [
            'pattern' => '^/(_(profiler|wdt)|css|images|js)/',
            'security' => false,
        ],
        'main' => [
            'anonymous' => false,
            'http_basic' => true,
        ]
    ],
    'access_control' => [
        ['path' => '^/', 'roles' => 'ROLE_API_CLIENT']
    ],
    'role_hierarchy' => [
        'ROLE_SALE' => ['ROLE_OFFER', 'ROLE_ORDER', 'ROLE_INVOICE'],
        
    ]
]);