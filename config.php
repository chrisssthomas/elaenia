<?php

return [
    'database' => [
        'name' => $_ENV['DB_NAME'],
        'username' => 'root',
        'password' => 'Yourdasabagel?528',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
