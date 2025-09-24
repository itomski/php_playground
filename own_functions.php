<?php

// Funktionsdefinition
function machWas() {
    echo '<h2>Hallo</h2>';
}

machWas();

function machWasAnderes($name = 'Leer') {
    echo '<h2>'.$name.'</h2>';
}

machWasAnderes('Bruce');

machWasAnderes();

$name = 'Bruce';
function machWasGanzAnderes() {
    // $name ist in der Funktion nicht verfügbar
    //echo '<h2>'.$name.'</h2>'; // Error
}

$zahl = 100;
function aendereZahl($zahl) {
    $zahl += 200; // Lokale zahl wird geändert
}

aendereZahl($zahl); // Kopie der globalen zahl wird in die lokale zahl abgelegt
echo $zahl;

echo '<br>';

$zahl = 100;
function aendereZahl2(&$zahl) { // & übergibt eine Referenz
    $zahl += 200;
}
aendereZahl2($zahl); // Eine Referenz der globalen zahl wird in die lokale zahl abgelegt
//aendereZahl2(500); // Error
echo $zahl;

echo '<br>';

// in der Praxis solle möglichst auf global verzichtet werden
$zahl = 100;
function aendereZahl3() {
    global $zahl; // Funktion greift auf eine Variable außerhalb
    $zahl += 500;
}
aendereZahl3();
echo $zahl;

echo '<br>';

$a = 100;
$b = &$a; // b ist eine Referenz auf a

$b = 50;
echo $a.'<br>';
$a = 70;
echo $b.'<br>';
unset($b); // Referenz wird entfernt

echo '<br>';

$zahl = 100; // globale Variable
// Globale Variablen sind in Funktionen "normalerweise" nicht verfügbar

function aendereZahl4($zahl) { // Parameter ist eine lokale Variable
    $andereZahl = 20; // Lokale Variable
    // Lokale Variablen sind nur innerhalb der Funktion sichtbar
}

$check = false;

if($check) {
    $inner = 100; // Variable ist auch außerhalb ihres Blocks sichtbar
}
else {
    $inner = 200;
}
echo $inner;

echo '<br>';

$zahl = 100;
function aendereZahl5($zahl) {
    $zahl += 1000;
    return $zahl; // Wert der lokalen Variable wird an den Aufrufer der Funktion zurückgegeben
    // return verlässt die Funktion
    echo 'Nach dem Return'; // Diese Anweisung wird nicht mehr ausgeführt
}

$zahl = aendereZahl5($zahl);
echo $zahl.'<br>';

$zahl = aendereZahl5(5000);
echo $zahl.'<br>';

echo aendereZahl5(10000);

//echo aendereZahl5('hallo');