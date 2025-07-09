<?php

$spielfeld = require_once 'spielfeld.php';

$gefunden = '';

function check($value, $max) : bool {
    return $value >= 0 && $value < $max;
}

if(count($_POST) > 0) { // Prüfen, ob etwas abgeschickt wurde

    // Eingabe in Zahlen umwandeln
    $x = intval($_POST['x']);
    $y = intval($_POST['y']);

    // Prüfen, ob die Zahlen im gültigen Bereich liegen (0 bis 10)
    if(check($x, 10) && check($y, 10)) {
        
        // In Spielfeld nach dem Pilz an der gewünschten Position schauen
        if($spielfeld[$x][$y] == 1) {
            $gefunden = 'Gefunden!';
        }
        else {
            $gefunden = 'Nicht gefunden!';
        }
    }
    else {
        $gefunden = 'Ungültiger Wert!';
    }
}

include_once 'form.php';