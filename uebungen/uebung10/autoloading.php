<?php

function custom_autoload($className) {

    $className = str_replace('\\', '/', $className); // Für Namespaces die Slashes ersetzen
    $file = CLASS_DIR.$className.'.php';

    if(file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('custom_autoload');