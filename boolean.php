<?php

$a = false; // wird als nichts ausgegeben
$a = true; // wird als 1 ausgegeben
unset($a); // Variable wird entfernt // Wird als false interpretiert
$a = 10; // // Wird als true interpretiert
$a = -10; // // Wird als true interpretiert
$a = 0; // // Wird als false interpretiert

if($a) {
    echo '<h2>WAHR!</h2>';
}
else {
    echo '<h2>FALSCH!</h2>';
}