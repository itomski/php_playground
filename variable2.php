<?php

$zahl = 100;
$zahl2 = $zahl; // Kopie

echo $zahl;
echo '<br>';
//echo PHP_EOL;
echo $zahl2;

echo '<hr>';

$zahl = 120;
echo $zahl;
echo '<br>';
echo $zahl2;

echo '<hr>';

$zahl2 = &$zahl; // Referenz
$zahl = 200;
$zahl2 = 500;

echo $zahl;
echo '<br>';
echo $zahl2;

echo '<hr>';
