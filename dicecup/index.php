<?php

require_once 'Faces.php';
require_once 'Dice.php';
require_once 'DiceCup.php';
require_once 'DiceCupAlternative.php';

// Schreibe ein Programm für einen Würfelbecher.
// Er ist in der Lage einen Wurf mit einem oder mehreren Würfeln zu simulieren.
// Die Art der Würfel darf gewählt werden (W4, W6, W10, W20 oder W100)

// function showFaces(Faces $f) {
//     echo $f->get();
// }
// showFaces(Faces::W100);

$dice1 = new Dice(Faces::W10);
$dice2 = new Dice(Faces::W100);
$dice3 = new Dice(Faces::W20);

echo $dice1->roll().'<br>';
echo $dice2->roll().'<br>';
echo $dice3->roll().'<br>';

echo '<hr>';

$cup = new DiceCup($dice3);
$results = $cup->roll(15);
foreach($results as $result) {
    echo $result.'<br>';
}

echo '<hr>';

$cup->changeDice($dice1);
$results = $cup->roll(1);
foreach($results as $result) {
    echo $result.'<br>';
}

echo '<hr>';

$cupA = new DiceCupAlternative(Faces::W10);
echo $cupA->rollSingle().'<br>';
$results = $cupA->roll(10);
foreach($results as $result) {
    echo $result.'<br>';
}