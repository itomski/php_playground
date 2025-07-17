<?php
require_once 'Pilzsuche.php';
require_once 'PilzsucheDTO.php';

session_start();

// Wenn in der Session kein Spiel entahlten ist
if(!isset($_SESSION['spiel']) || !($_SESSION['spiel'] instanceof Pilzsuche)) {
    // Neues Spiel anlegen
    $_SESSION['spiel'] = new Pilzsuche(5);
}

// Variable Zeigt als Referenz auf das Objekt in der Session
$spiel = $_SESSION['spiel'];

// 1 = Pilz gesetzt
// -1 = Pilz nicht gesetzt
// 2 = Pilz gefunden
// -2 = Pilz nicht gefunden
// -3 = Ungültige Positionen
$status = 0;

// Wenn Formular abgeschickt wird...
if(isset($_POST['btn'])) {

    $dto = new PilzsucheDTO($_POST, 5);

    switch($dto->getBtn()) {
        case 'suchen':
            if($dto->isValid())
                //$status = $spiel->checkPilzAnPosition($dto->getX(), $dto->getY()) ? 2 : -2;
                $status = $spiel->pilzEinsammeln($dto->getX(), $dto->getY()) ? 2 : -2;
            else
                $status = -3;
            break;

        case 'setzen':
            if($dto->isValid())
                $status = $spiel->setzePilz($dto->getX(), $dto->getY()) ? 1 : -1;
            else
                $status = -3;
            break;

        case 'reset':
            $spiel->reset();
            $spiel->pilzeZufaelligPlatzieren(5);
            break;
    }
}

$spiel->debugInfo();

include_once 'view.php';