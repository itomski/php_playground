<?php

echo '<pre>';

// unär
$a = -10;
$a++; // increment
$a--; // decrement (postfix)
--$a; // decrement (prefix)
++$a; // increment (prefix)

echo PHP_EOL;
echo PHP_EOL;


$a = 10;
echo ++$a; // Erhöhung vor der Ausgabe 
echo PHP_EOL;
echo $a++; // Erhöhung nach der Ausgabe 
echo PHP_EOL;
echo $a; // hier ist das postfix sichtbar

echo PHP_EOL;
echo PHP_EOL;

$c = true;
echo "'$c'";
echo PHP_EOL;
$c = !$c; // invertieren (true wird zu false und false zu true)
echo "'$c'";
echo PHP_EOL;


echo 10; // 10 ist ein Literal
echo PHP_EOL; // Konstante, die ein Zeilenumbruch in Sourcecode anzeigt (EOL = END-OF-LINE)
echo $a; 
echo PHP_EOL;
echo "Hallo"; // "Hallo" ist ein String-Literal 
echo PHP_EOL;

// 1++; // increment und decrement funktioniern nur mit Variablen, NICHT mit Literalen

// binär
echo 2 + 7;
echo PHP_EOL;
$b = 10;
echo $b + 7;
echo PHP_EOL;

// +, -, *, /
echo 10 + 2 * 5; // Punkt (* und /) vor Strich (+ und -)
echo PHP_EOL;
echo (10 + 2) * 5;
echo PHP_EOL;

// %, **
echo 10 % 5; // Liefert den Rest der Ganzzahligen-Teilung
echo PHP_EOL;

echo 12 % 5; // 2
echo PHP_EOL;

echo (1 % 2 == 0) ? "gerade" : "ungerade";
echo PHP_EOL;
echo (2 % 2 == 0) ? "gerade" : "ungerade";
echo PHP_EOL;
echo (3 % 2 == 0) ? "gerade" : "ungerade";
echo PHP_EOL;
echo (4 % 2 == 0) ? "gerade" : "ungerade";
echo PHP_EOL;
echo (5 % 2 == 0) ? "gerade" : "ungerade";
echo PHP_EOL;

echo 2 ** 8; // Potenzierung
echo PHP_EOL;

// später
echo ($b > 10) ? "größer" : "kleiner";
echo PHP_EOL;

echo 1 + 2 + 3 + 4;
echo PHP_EOL;

echo 1 + 2 * 3 + 4;
echo PHP_EOL;

// = ist eine Zuweisung
$d = 1 + 2 * 3 + 4; // Zuweisung erfolgt als letztes
echo PHP_EOL;

echo '</pre>';