<?php

spl_autoload_register(function(string $class) {
    $path = ''.$class.'.php';
    if(file_exists($path)) {
        require_once $path;
    }
});

$connection1 = DbConnection::getInstance(); // Aufruf der Klassenmethode
$connection1->startRequest();
var_dump($connection1);

$connection2 = DbConnection::getInstance();
$connection2->startRequest();
var_dump($connection2);


function doSomethingElese() {
    doSomething();
}


function doSomething() {
    DbConnection::getInstance()->startRequest();
    // Hier wird eine DbConnection benötigt
    var_dump(DbConnection::getInstance());
}

doSomething();