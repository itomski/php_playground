<?php

// Datei mit den Funktionen wird eingebunden
require 'includes/funktionsarchiv.php';

// Funktion wird verwendet
echo '<p>'.rollD6().'</p>';

?>

<p><?= rollD6() ?></p>
<p><?= rollD10() ?></p>
<p><?= rollD100() ?></p>
<p><?= rollDice(10) ?></p>
<p><?= rollDice() ?></p><!-- default ist 6 -->