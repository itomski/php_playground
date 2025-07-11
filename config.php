<?php
session_start();

const DEBUG_MODE = true;

function debugInfo() {
    if(DEBUG_MODE) {
        echo '<pre>';
        echo 'SESSION: '.PHP_EOL;
        print_r($_SESSION);
        echo 'GET: '.PHP_EOL;
        print_r($_GET);
        echo 'POST: '.PHP_EOL;
        print_r($_POST);
        echo '</pre>';
    }
}

debugInfo();