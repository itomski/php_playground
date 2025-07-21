<?php

function autoload(string $className): void {
   $file = './classes/'.$className.'.php';
   if(file_exists($file))
        require_once $file;
}

// die Funktion autoload wir registriert
spl_autoload_register('autoload');