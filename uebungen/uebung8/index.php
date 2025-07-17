<?php
require_once 'Pilzsuche.php';

session_start();

// Wenn in der Session kein Spiel entahlten ist
if(!isset($_SESSION['spiel']) || !($_SESSION['spiel'] instanceof Pilzsuche)) {
    // Neues Spiel anlegen
    $_SESSION['spiel'] = new Pilzsuche(5);
}

// Variable Zeigt als Referenz auf das Objekt in der Session
$spiel = $_SESSION['spiel'];


// Wenn Formular abgeschickt wird...
if(isset($_POST['btn'])) {

    $x = intval($_POST['x'] ?? 0);
    $y = intval($_POST['y'] ?? 0);

    switch($_POST['btn']) {
        case 'suchen':
            echo $spiel->checkPilzAnPosition($x, $y) ? 'gefunden' : 'nicht gefunden';
            break;

        case 'setzen':
            echo $spiel->setzePilz($x, $y) ? 'gesetzt' : 'nicht gesetzt';
            break;

        case 'reset':
            $spiel->reset();
            $spiel->pilzeZufaelligPlatzieren(5);
            break;
    }
}

$spiel->debugInfo();

include_once 'view.php';