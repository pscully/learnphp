<?php 

return [

    'database' => [
        
        'name' => 'php_test',
        'username' => 'root',
        'password' => 'asdf6900',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];