<?php

$name = 'Peter';

echo "TEXT: $name <br>";
echo "TEXT: {$name} <br>";

// End of Line Kommentar
//echo 'text: $name <br>';

echo '<h1>Das ist das "Haus" von Nikigraus</h1>';
echo '<h1>Das ist das \'Haus\' von Nikigraus</h1>'; // ' muss maskiert werden

echo "<h1>Das ist das 'Haus' von Nikigraus</h1>";
echo "<h1>Das ist das \"Haus\" von Nikigraus</h1>"; // " muss maskiert werden

echo "<h1>Das ist das \tHaus \nvon Nikigraus</h1>"; // \t = Tab, \n = New Line


// Multiline Kommentare
/*
echo 'A';
echo 'B';
*/

echo 'A'/*.'B'*/;

// PHP-Docs Kommentare
/**
 * Eine Funktion, die zwei Zahlen addiert
 */
function abc($a, $b) {
    return $a + $b;
}

