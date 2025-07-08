<?php

$zahl = 5;

while($zahl > 0) {
    echo '<p>'.$zahl--.'</p>';
}

$warteschlange = ['Peter', 'Bruce', 'Carol', 'Natasha', 'Scott'];

// !empty() = solange die Warteschlange NICHT LEER ist 
// while(!empty($warteschlange)) {
//     echo array_shift($warteschlange).'<br>';
// }

// Auch möglich
while($warteschlange) { // Kopfgesteuert
    echo array_shift($warteschlange);
}

echo '<pre>';
print_r($warteschlange);
echo '</pre>';


$zahl = 3;
// Wird mind. 1x durchgearbeitet
do { // Fußgesteuert
    echo '<p>'.$zahl--.'</p>';
} 
while($zahl >= 0);