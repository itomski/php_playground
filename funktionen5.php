<?php

// string, int, float, bool, mixed, array

// Parameter können nur ints sein
// Rückgabetyp ist ein int
function add(int $p1, int $p2) : int {
    return $p1 + $p2; // Das Ergebnis wird, wenn nötig auf den Rückgabetyp konvertiert
}

// Parameter können ints oder floats sein
// Rückgabetyp kann int oder float sein
function sub(int|float $p1, int|float $p2) : int|float {
    return $p1 - $p2;
}

// ? = diese Funktion liefert einen boolean oder eine null
function check(string $str) : ?bool {
    
    if(strlen($str) == 0) return null;

    if(strtolower($str) == 'ok') {
        return true;
    }
    return false;
}


//echo add(1, 2.5); // float wird zu int (Warnung)
echo add(1, 2) + add(2, 7);
echo '<br>';
echo sub(1, 2.5);
echo '<br>';
echo add('2', '3'); // Automatische Konvertierung von String in int
echo '<br>';
//echo add('A', 'B'); // ERROR: Strings können nicht konvertiert werden