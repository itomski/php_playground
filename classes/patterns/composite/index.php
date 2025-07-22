<?php


function autoload(string $className): void {
   $file = './classes/'.$className.'.php';
   if(file_exists($file))
        require_once $file;
}

spl_autoload_register('autoload');

