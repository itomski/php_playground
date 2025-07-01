<?php

$orginal = 100;
//$copy = $orginal; // Wert wird kopiert (by value)
$copy = &$orginal; // Wert wird referenziert (by reference), beide Variablen zeigen auf den gleichen Speicher

echo "<pre>";
echo "\n";
echo $orginal;
echo "\n";
echo $copy;

//$orginal = 200;
$copy = 200; // Änderung der einen Referenz verändert den Wert auch für die andere Referenz
echo "\n";
echo $orginal;
echo "\n";
echo $copy;

// primitive Datentypen werden per Value weitergegeben
// objekte (komplexe Datentypen) werden per Referenz weitergegeben

echo "</pre>";