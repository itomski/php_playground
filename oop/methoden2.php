<?php

require_once 'SaveFahrzeug.php';

$f1 = new SaveFahrzeug();
//$f1->kennzeichen = 'HH:AB123'; // Error: private
//echo $f1->kennzeichen; // Error: private

// Alle öffentlichen (public) Methoden bilden die Schnittstelle zu einer Klasse

$f1->setKennzeichen('HH:AB123'); // Kontrolliertes Schreiben
echo $f1->getKennzeichen().'<br>';

echo $f1;