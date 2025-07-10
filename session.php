<?php

// Sessions sind per default nicht aktiv
session_start(); // Sessions aktivieren

if(!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
else {
    $_SESSION['count']++;
}

echo '<pre>';
print_r($_REQUEST);
print_r($_SESSION);
print_r($_ENV);
echo '<pre>';

