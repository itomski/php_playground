<?php

function hi($form, $name = 'Unbekannt', $br = true) {
    return $form.'! Mein Name ist '.$name. ($br ? '<br>' : '');
}

echo hi('Hallo', 'Carol');
echo hi('Hallo', '', false);
echo hi('Hallo');

function customList($p1, $p2, $p3, $p4, $p5) {
    $output = '<ul><li>'.$p1.'</li>';
    $output .= '<li>'.$p2.'</li>';
    $output .= '<li>'.$p3.'</li>';
    $output .= '<li>'.$p4.'</li>';
    $output .= '<li>'.$p5.'</li></ul>';
    return $output;
}

echo customList('Peter', 'Bruce', 'Catol', 'Natasha', 'Scott');

$wert1 = '';
$wert2;
$wert3 = null;
$wert5 = 'moin';

function checkIsSet($wert) {
    if(isset($wert)) {
        echo 'DA!<br>';
    }
    else {
        echo 'NICHT DA!<br>';
    }
}

function checkIsEmpty($wert) {
    if(empty($wert)) {
        echo 'LEER!<br>';
    }
    else {
        echo 'VOLL!<br>';
    }
}

checkIsSet($wert1);
checkIsSet($wert2); // Warning: Variable ist nicht initialisiert
checkIsSet($wert3);
checkIsSet($wert4); // Warning: Variable ist nicht deklariert
checkIsSet($wert5);

echo '<br>';

checkIsEmpty($wert1);
checkIsEmpty($wert2);
checkIsEmpty($wert3);
checkIsEmpty($wert4);
checkIsEmpty($wert5);