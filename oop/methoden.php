<?php

require_once 'Fahrzeug.php';

$f1 = new Fahrzeug();
$f1->kennzeichen = "HH:AB123";
$f1->baujahr = 1995;
$f1->print();
echo $f1->getBaujahr().'<br>';

$f2 = new Fahrzeug();
$f2->kennzeichen = 'HB:XY367';
$f2->baujahr = 2015;
$f2->print();
echo $f2->getBaujahr().'<br>';
echo $f2->baujahr.'<br>';

$f2->baujahr = 'dkjshdkfhfdk';

echo $f2.'<br>';
echo $f2->printChecks();