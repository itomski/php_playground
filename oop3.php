<?php
// Klasse wird importiert
require_once 'classes/Fahrzeug.php';

// $f1 ist eine Referenz auf ein Objekt(Instanz einer bestimmten Klasse)
$f1 = new Fahrzeug();

// Klasse = Bauplan
// Objekt = Ein konkreter Vertreter einer Klasse

$f1->setBaujahr(1820);
$f1->setKennzeichen('HH:AB123');

$f1->printInfo();

echo $f1->getKennzeichen().'<br>';
echo $f1->getBaujahr().'<br>';