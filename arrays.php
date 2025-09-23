<?php

$zahl = 10;
$zahl = 20; // Überschrieben
echo $zahl;
echo '<br>';

$zahl = array();
$zahl[] = 10; // Landet an der ersten freien Stelle im Array
$zahl[] = 20; // Array wird vergrößert
print_r($zahl);
echo $zahl[0];
