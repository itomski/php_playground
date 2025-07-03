<?php

// Definition der Funktion
function sagHallo() { // Nimmt KEINE Parameter entgegen
    echo '<p>Hallo Besucher ('.date('d.m.y H:i:s').')</p>';
    // Liefert keinen Rückgabewert
}

// Verwendung
sagHallo();
sagHallo();
sagHallo();

// Definition der Funktion
function sagHalloMitNamen($name) { // Nimmt einen Pflicht-Parameter entgegen
    echo '<p>Hallo '.$name.'! ('.date('d.m.y H:i:s').')</p>';
}

sagHalloMitNamen('Peter');
sagHalloMitNamen('Bruce');
sagHalloMitNamen('Carol');

// Definition der Funktion
function sagHalloMitVollenNamen($vorname, $nachname) { // Nimmt zwei Pflicht-Parameter entgegen
    // Funktionsparameter sind NUR innerhalb der Funktion sichtbar/verwendbar
    $vorname = strtolower($vorname); // in Kleinbuchstaben umwandeln
    $vorname = ucfirst($vorname); // Erster Buchstabe soll Groß sein
    $nachname = ucfirst(strtolower($nachname)); // Funktionen werden von innen nach außen abgearbeitet
    echo '<p>Hallo '.$vorname.' '.$nachname.'!</p>';
}

sagHalloMitVollenNamen('peter', 'PARKER');
sagHalloMitVollenNamen('BRUce', 'bAnner');

$vname = 'Carol';
$nname = 'Danvers';
// Variablen außerhalb der Funktionen können NUR über die 
// Parameterliste in die Funktion gelangen
sagHalloMitVollenNamen($vname, $nname);
sagHalloMitVollenNamen($nname, $vname);

$vname = 'cARol';
$nname = 'DanVERS';
sagHalloMitVollenNamen($vname, $nname);
echo $vname.' '.$nname.'<br>';

function changeValues(&$value) { // Parameter ist eine (&) Referenz/Verlinkung zum Original
    $value = ucfirst(strtolower($value));
}

changeValues($vname);
changeValues($nname);
echo $vname.' '.$nname.'<br>';

function changeValuesBetter($value) { // Parameter ist eine Kopie
    $value = ucfirst(strtolower($value));
    return $value; // return verlässt die Funktion und gibt den Rückgabewert an den Aufrufer zurück
    // return ucfirst(strtolower($value));
}

$vname = 'cARol';
$nname = 'DanVERS';
// Die veränderte Kopie aus der Funktion wird auf die Originalvariable zugewiesen
$vname = changeValuesBetter($vname);
$nname = changeValuesBetter($nname);
//$nname = 'Danvers';
echo $vname.' '.$nname.'<br>';