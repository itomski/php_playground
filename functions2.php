<?php

// Variadische Funktion
function summieren(float ...$zahlen) : float {
    // Die Werte werden in der Funktion als ein Array bereitgestellt
    $erg = 0;
    foreach($zahlen as $zahl) {
        $erg += $zahl;
    }
    return $erg;
}

echo summieren(1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,7);


function add(float $a, float $b) : float {
    return $a + $b;
}

// Variable Funktion
$func = 'add';
echo $func(10, 20); // dynamischer Funktionsaufruf

