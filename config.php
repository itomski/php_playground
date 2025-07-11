<?php
session_start();

const DEBUG_MODE = false;

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

function checkLogin() {
    // Prüft, ob jemand eingeloggt ist. Wenn nicht, wird er/sie auf die login.php weitergeleitet
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true) {
        header('Location: login.php');
        die();
    }
}