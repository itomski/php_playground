<?php

$a = 10;
$b = 20;
$sum = 0;

function add($p1, $p2) {
    // Kein guter Stil!!!!
    global $sum; // Macht die $sum-Variable von außerhalb der Funktion innerhalb der Funktion nutzbar
    $sum = $p1 + $p2;
    return $sum;
}

echo add($a, $b);
echo '<br>';
echo $sum;
echo '<br>';

echo add("A", "B");
echo '<br>';


// $firstname ist ein Pflicht-Parameter (immer an den Anfang der Parameterliste)
// $lastname ist ein optionaler Parameter (immer ans Ende der Parameterliste)
function greet($firstname, $lastname = "") {
    echo "<p>Guten Tag {$firstname} {$lastname}!</p>";
}

greet('Peter', 'Parker');
greet('Bruce');