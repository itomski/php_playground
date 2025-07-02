<?php

echo '<pre>';

// Zusammengesetzte Operatoren

$a = 10;
//1 += 5; // 1 = 1 + 5;
$a += 5; // $a = $a + 5;
$a -= 5; // $a = $a - 5;

// Können nur eine Variable auf der linkes Seite haben
// -=, +=, /=, *=, %=, **=

// Vergleichsoperatoren
$b = 15;
$c = 10;

// var_dump ist eine vorgefertigte Funktion
// Zeigt Informationen zu einer Variable an

var_dump($b == $c); // Ist gleich? false
echo PHP_EOL;

$b = 20;
$c = 20;
//$c = 20.0;
//$c = '20';
var_dump($b == $c); // Ist gleich? true. Trotz unterschiedlicher Datentypen
echo PHP_EOL;
var_dump($b === $c); // Ist gleich? true. Datentyp MUSS gleich sein
echo PHP_EOL;

var_dump($b != $c); // Ist ungleich? Ohne Datentyp
echo PHP_EOL;
var_dump($b !== $c); // Ist ungleich? Mit Datentyp
echo PHP_EOL;

// Reloationale Operatoren

var_dump(5 < 7); // kleiner
echo PHP_EOL;
var_dump(7 > 9); // größer
echo PHP_EOL;
var_dump(5 <= 7); // kleiner oder gleich
echo PHP_EOL;
var_dump(7 >= 7); // größer oder gleich
echo PHP_EOL;

// Logische Operatoren

// && AND
// || OR
// ! NOT

$alter = 15;
$schulPflichtig = true;

// Beide Prüfungen MÜSSEN true ergeben
// Ist das Alter von 16 überschritten?
// UND
// Liegt eine Schulpflicht nicht mehr vor?
var_dump($alter > 16 && $schulPflichtig == false);
echo PHP_EOL;

// Eines von beiden MÜSS true ergeben
// Ist jemand jünger oder gleich 16?
// ODER
// Liegt eine Schulpflicht vor?
var_dump($alter <= 16 || $schulPflichtig == true);
echo PHP_EOL;

var_dump(!($alter <= 16)); // Nach der Prüfung des Alters wird das Ergebnis umgedreht
echo PHP_EOL;

// XOR (exclusiver ODER), Nur eine Seite darf TRUE sein
var_dump($alter <= 16 ^ $schulPflichtig == true);
echo PHP_EOL;


// Verkettungsoperator
$text = "ABCD";
//$text = $text . "EFGH";
$text .= "EFGH"; // $text = $text . "ERFGH"
echo $text;
echo PHP_EOL;
var_dump($text);

echo '</pre>';
