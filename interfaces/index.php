<?php

spl_autoload_register(function(string $class) {
    $path = ''.$class.'.php';
    if(file_exists($path)) {
        require_once $path;
    }
});


function bringToTrueNorth(Movable $obj) {
    $obj->moveTo(100, 100);
}

//bringToTrueNorth(new stdClass());
bringToTrueNorth(new Person());
bringToTrueNorth(new Fahrzeug());