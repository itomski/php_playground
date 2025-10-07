<?php

date_default_timezone_set('Europe/Berlin');

const CLASS_DIR = '';

/*
function loadClass(string $className): void {
    $path = ''.$className.'.php';
    require_once $path;
}
spl_autoload_register('loadClass');
*/

spl_autoload_register(function(string $className): void {
    $path = CLASS_DIR.$className.'.php';
    if(file_exists($path))
        require_once $path;
});

session_start();