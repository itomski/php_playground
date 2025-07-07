<?php

$aktiv = false;

if($aktiv) {
    echo 'AKTIV<br>';
}
else {
    echo 'NICHT AKTIV<br>';
}

echo '<br>';

$zahl = 100;

if($zahl < 20) {
    echo 'KLEIN<br>';
}
else {
    if($zahl < 50) {
        echo 'MITTEL<br>';
    }
    else {
        echo 'GROSS<br>';
    }
}

echo '<br>';

if($zahl < 20) {
    echo 'KLEIN<br>';
}
else if($zahl < 50) {
    echo 'MITTEL1<br>';
}
else if($zahl < 70) {
    echo 'MITTEL2<br>';
}
else {
    echo 'GROSS<br>';
}

echo '<br>';


$zahl = -10;

switch($zahl) {

    case $zahl < 0:
        echo 'UNGÜLTIG<br>';
        break;

    case 5:
        echo 'A<br>';
        break;

    case 10:
        echo 'B<br>';
        break;

    case 15:
    case 20:
        echo 'C<br>';
        break;

    default:
        echo 'FALSCHE AUSWAHL!<br>';
}

echo '<br>';


$tag = 'SA';

switch($tag) {

    case 'MO':
        echo 'Montag<br>';

    case 'DI':
        echo 'Dienstag<br>';

    case 'MI':
        echo 'Mittwoch<br>';

    case 'DO':
        echo 'Donnerstag<br>';

    case 'FR':
        echo 'Freitag<br>';

    default:
        echo 'Wochenende<br>';
}