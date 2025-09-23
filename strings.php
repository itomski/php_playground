<?php

$text = 'Das ist das Haus von';
$name = 'Peter';
$break = '<br>';

echo $text.$name.$break; // Verkettung

// robot.moveTo(10,20)
// robot->moveTo(10,20)

echo $text.' '.$name.$break;

echo '<hr>';

$text = ''; // Der alte Wert wird überschrieben
$text .= 10; // $text = $text.10;
echo $text.$break;
$text .= 20;
echo $text.$break;
$text .= 30;
echo $text.$break;
$text .= 40;
echo $text.$break;

echo '<hr>';

echo 'Hallo! mein Name ist '.$name.$break;
echo 'Hallo! mein Name ist $name'.$break; // $name wird nicht interpretiert
echo "Hallo! mein Name ist $name".$break; // $name wird interpretiert
echo "Hallo! mein Name ist {$name}".$break; // $name wird interpretiert
//echo "Hallo! mein Name ist ${name}".$break; // $name wird interpretiert (Deprecated)
echo "Hallo! mein Name ist \$name".$break; // $name wird nicht interpretiert

$name = 'Scott';
$$name = 'Antman'; // $Scott = 'Antman'
echo $Scott;

echo '<hr>';

echo "Hallo! mein Name ist 'Peter'<br>";
echo 'Hallo! mein Name ist "Peter"<br>';
echo "Hallo! mein Name ist \"Peter\"<br>";