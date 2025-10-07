<?php

spl_autoload_register(function(string $class) {
    $path = ''.$class.'.php';
    if(file_exists($path)) {
        require_once $path;
    }
});

$p1 = new Person('Peter', 'Parker');
$p1->setDebugMode(true);
$p1->defaultDebug();
$p1->systemDebug();