<?php

// PHP unterscheidet Groß- und Kleinschreibung
$a = 10;
$A = 15;
$_abc = 20;
$anzahl_personen = 20; // snake_case
const PI = 3.14; // SCREAMING_SNAKE_CASE
$anzahlPersonen = 20; // camelCase / beginnt mit Kleinbuchstaben / wird für Eigenschaften, Methoden, Funktionen verwendet
//$anazhl-personen = 100; // kebap-case - produziert in PHP einen Syntax-Fehler

// PascalCase: beginnt mit Großbuchstaben / wird für Klassennamen verwendet
class ZufallsZahlGenerator {    
}

echo 'A';
echo PHP_EOL; // Ein Zeilenumbruch im Sourcecode
echo 'B';
echo PHP_EOL;
echo 'C';
echo '<br>';
echo 'D';
