<?php

// Wiederverwendbare Anweisungen

var_dump(100);
var_dump("ABC");
$a = true;
var_dump($a);

echo "Hallo", $a, 100; // Alle Teile werden ausgegeben
echo "Hallo".$a.'100'; // Verbindet alle Teile zu einem String vor der Ausgabe
echo("Hallo"); // Auch so möglich
print "Hallo"; // wie echo mur gibt es nur einen Wert aus
print("Hallo"); // auch wie eine Funktion nutzbar