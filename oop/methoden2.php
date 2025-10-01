<?php

require_once 'SaveFahrzeug.php';

$f1 = new SaveFahrzeug('HH:AB123');
//$f1->kennzeichen = 'HH:AB123'; // Error: private
//echo $f1->kennzeichen; // Error: private

// Alle öffentlichen (public) Methoden bilden die Schnittstelle zu einer Klasse

$f1->setKennzeichen('HH:AB123'); // Kontrolliertes Schreiben
echo $f1->getKennzeichen().'<br>';

$liste = [];
$liste[] = new SaveFahrzeug('HH:XY345', 'Renault', 'Scenic'); // Konstruktor wird benutzt
$liste[] = new SaveFahrzeug('HH:AB227', 'Fiat', '500');
$liste[] = new SaveFahrzeug('M:AB9974', 'Ford');

echo '<pre>';
print_r($liste);
echo '</pre>';

foreach($liste as $fahrzeug) {
    echo '<p>'.$fahrzeug.'</p>';
}