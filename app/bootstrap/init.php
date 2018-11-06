<?php

$GLOBALS['config'] = [
    'mysql' => [
        'db_host' => '127.0.0.1',
        'db_name' => 'example',
        'db_username' => 'example',
        'db_pass' => 'test',
    ],
    
];

spl_autoload_register(function($className) {
    
    require_once './app/classes/' . $className . '.php';
});
