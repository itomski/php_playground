<?php

$zahl = 10;

if($zahl == 10) {
    echo 'OK!';
}
else {
    echo 'NICHT OK!';
}

echo '<br>';

echo ($zahl == 10) ? 'OK!' : 'NICHT OK!';

echo '<br>';

if(isset($zahl2)) { // ist die Variable verfügbar/bekannt
    //echo 'Die Zahl ist '.$zahl2; // Wenn die $zahl2 nicht deklariert ist, gibt es ein Warnung
    echo 'Die Zahl ist '.($zahl2 ? $zahl2 : 'Unbekannt');
    echo '<br>';
    echo 'Die Zahl ist '.($zahl2 ?: 'Unbekannt'); // Ausgabe, wenn vorhanden, sonst Unbekannt
}

echo '<br>';
//echo $zahl2 ? $zahl : 'Leer';
echo $zahl2 ?: 'Leer'; // Variable muss deklariert sein, sonst Warnung
echo $zahl2 ?? 'Leer'; // Ist die Variable nicht deklariert, dann Leer (keine Warnung). Prüfung mit isset nicht nötig