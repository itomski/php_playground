<?php

//phpinfo();

echo '<pre>';

// Wiederverwendbare Anweisungen

var_dump(100, 50, 2.5);
echo PHP_EOL;
var_dump("ABC");
echo PHP_EOL;
$a = true;
var_dump($a);
echo PHP_EOL;

echo "Hallo", $a, 100; // Alle Teile werden ausgegeben
echo PHP_EOL;
echo "Hallo".$a.'100'; // Verbindet alle Teile zu einem String vor der Ausgabe
echo PHP_EOL;
echo("Hallo"); // Auch so möglich
echo PHP_EOL;
print "Hallo"; // wie echo mur gibt es nur einen Wert aus
echo PHP_EOL;
$v = print("Hallo"); // auch wie eine Funktion nutzbar
echo PHP_EOL;
echo $v;
echo PHP_EOL;

$erg = pow(5, 2);
echo $erg;
echo PHP_EOL;

$erg = gettype($erg); // Rückgabewert wird in einer Variable gespeichert
echo $erg;
echo PHP_EOL;

echo gettype(250); // Soforige Ausgabe des Rückgabewertes
echo PHP_EOL;

print gettype('XYZ');
// print gettype('XYZ', 100); // Error. Nur 1 Parameter erlaubt
echo PHP_EOL;
echo PHP_EOL;

$erg = (int)'25XYZ123';
echo gettype($erg); // Cast von String auf int
echo PHP_EOL;
echo $erg;
echo PHP_EOL;
echo PHP_EOL;

print gettype(100.25-25);
echo PHP_EOL;

echo '</pre>';