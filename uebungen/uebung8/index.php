<?php

require_once 'Pilzsuche.php';

$spiel = new Pilzsuche(5);



if(isset($_POST['btn'])) {

    $x = intval($_POST['x']);
    $y = intval($_POST['y']);

    switch($_POST['btn']) {
        case 'suchen':
            echo $spiel->checkPilzAnPosition($x, $y) ? 'gefunden' : 'nicht gefunden';
            break;

        case 'setzen':
            echo $spiel->setzePilz($x, $y) ? 'gesetzt' : 'nicht gesetzt';
            break;
    }
}

$spiel->debugInfo();

include_once 'view.php';