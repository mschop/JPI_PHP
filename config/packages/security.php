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
            'stateless' => true
        ]
    ],
    'access_control' => [
        ['path' => '^/', 'roles' => 'ROLE_API_CLIENT']
    ],
    'role_hierarchy' => [
        'ROLE_ALL' => [
            'ROLE_SALE',
        ],
        'ROLE_SALE' => ['ROLE_OFFER', 'ROLE_ORDER', 'ROLE_INVOICE', 'ROLE_CUSTOMER'],
        'ROLE_CUSTOMER' => [
            'ROLE_CUSTOMER_VIEW',
            'ROLE_CUSTOMER_EDIT',
            'ROLE_CUSTOMER_DELETE',
        ],
        'ROLE_PRODUCT' => [
            'ROLE_PRODUCT_VIEW',
            'ROLE_PRODUCT_EDIT',
            'ROLE_PRODUCT_DELETE'
        ]
    ]
]);