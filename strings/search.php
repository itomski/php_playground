<?php

$str = "Das ist das Haus von Nikigraus";
echo $str.'<br>';

$part = substr($str, 5, 5);
echo $part.'<br>';

$part = substr($str, 4);
echo $part.'<br>';

echo strpos($str, 'a').'<br>'; // Erstes vorkommen
echo strrpos($str, 'a').'<br>'; // Letztes vorkommen


printf("Das ist das %s von %s<br>", 'Haus', 'Nikigraus'); // Gibt einen formatierten String aus
printf("Das ist das %s von %s<br>", 'Katze', 'Bob');
printf("Das ist das %s von %s<br>", 'Rechner', 'Carol');
printf("%X<br>", 287);
$str = sprintf("Das ist das %s von %s<br>", 'Haus', 'Nikigraus'); // Liefert einen formatierten String

const TEXT = "Haus: Das ist das Haus von Hikigraus<br>";

$c = 0;
echo str_replace('Haus', 'Katze', TEXT, $c); // Suchen und Ersetzen
echo $c;