<?php

function psr4Autoload(string $className) {
    $path = str_replace('\\', '/', $className);
    $file = __DIR__.'/../classes/'.$path.'.php';

    if(file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('psr4Autoload');