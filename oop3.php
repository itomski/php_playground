<?php
// Klasse wird importiert
require_once 'classes/Fahrzeug.php';

// $f1 ist eine Referenz auf ein Objekt(Instanz einer bestimmten Klasse)
$f1 = new Fahrzeug();

// Klasse = Bauplan
// Objekt = Ein konkreter Vertreter einer Klasse

$f1->setBaujahr(1992);
$f1->setKennzeichen('HH:AB123');

$f1->printInfo();

echo $f1->getKennzeichen().'<br>';
echo $f1->getBaujahr().'<br>';

//$f2 = $f1; // Eine neue Referenz auf das gleich Objekt

$f2 = new Fahrzeug();
//$f2->kennzeichen = 'adsjkdasgdksa'; // ist privat
$f2->setKennzeichen('   xy:Ac22  '); // Liefert void (Nichts) zurück
$f2->setMarke('Renault');
$f2->setModell('Zoe');
if($f2->isFahrbereit()) {
    echo 'Ist fahrbereit.<br>';
}

// Auch möglich, das die Stetter $this zurückgeben (Object-Chaining)
$f2->setMarke('Renault')->setModell('Zoe');


function showKennzeichen($fahrzeug) {
    echo '<h2>'.$fahrzeug->getKennzeichen().'</h2>';
}

showKennzeichen($f1);
showKennzeichen($f2);