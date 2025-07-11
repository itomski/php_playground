<?php

require_once 'config.php';
checkLogin(); // Prüft, ob User eingelogt, sonst Weiterleitung auf login.php

$zahlen = [10,15,22,7,9,1,-15];
// $zahlen = array(10,15,22,7,9,1,-15); // gleichwertig

echo $zahlen;
echo '<br>';
echo $zahlen[3]; // Lesen
$zahlen[4] = 1000; // Schreiben
$zahlen[100] = 85; // Schreiben
$zahlen[] = 185; // an die nächste freie Stelle schreiben
$zahlen[] = 'Peter';
$zahlen[90] = 'Bruce'; // Auffüllen der Lücken
echo '<br>';

echo $zahlen[25] ?? 'Nicht vorhanden';
echo '<br>';
echo 'Größe des Arrays: '.count($zahlen);
echo '<br>';


// Inhalt des Array anzeigen
echo '<pre>';
print_r($zahlen);
//var_dump($zahlen);


/*
$person1 = [
    'Peter',
    'Parker',
    32,
    'New York',
    'Spiderman',
];
*/

// besser
$person1 = [
    'vorname' => 'Peter',
    'nachname' => 'Parker',
    'alter' => 32,
    'geburtsort' => 'New York',
    'alias' => 'Spiderman',
];

print_r($person1);

echo '</pre>';

echo $person1['vorname'];