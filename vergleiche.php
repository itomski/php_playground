<?php

function printLine($value) {
    echo $value.'<br>';
}

$a = 10; // Zuweisung
// $b = '10';
$b = 10.0;

printLine($a == $b); // ist der Wert gleich? (ggfl. nach Konvertierung)
var_dump($a == $b);

printLine($a === $b); // ist der Wert und der Datentyp gleich?
var_dump($a === $b);

echo '<hr>';

var_dump($a != $b); // ist der Wert ungleich? (ggfl. nach Konvertierung)
var_dump($a !== $b); // ist der Wert oder der Datentyp ungleich?
var_dump(!true); // false

echo '<hr>';

$a = 10;
$b = 20;
var_dump($a < $b);
var_dump($a > $b);
var_dump($a <= $b);
var_dump($a >= $b);

echo '<hr>';

var_dump(10, 20, 50, true, 10.7);
