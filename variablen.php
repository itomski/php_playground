<?php
$a; // Deklaration (Vorstellung einer Variable)
$a = 123; // Initialisierung (Erste Wertzuweisung)
$a = 256; // Änderung
echo $a;
echo "<br>";

$b = 500; // Deklaration und Initialisierung
echo $b;
echo "<br>";

$b = 'ABC'; // Datentyp der Variable ändert sich automatisch von int auf string
echo $b;
echo "<br>";

$c;
echo $c;
echo "<br>";

$person = null; // Hinweis darauf, dass später in dieser Variable ein Objekt abgelegt wird
echo $person;
echo "<br>";

/*
null - Nichts
int - Ganzzahl z.B. 1
float - Gleitkommazahl z.b. 1.5
bool - Wahrheitsweite true/false
string - Zeichenketten "das ist das..."
array - Sammlung von Werten
object - Objekte werden aus Klassen gebildet
callable - Callbacks
resource - Referenzen zu externen Resourcen
*/