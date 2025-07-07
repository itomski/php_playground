<?php

// Last-In-First-Out (LIFO)
// Stack

// First-In-First-Out
// Warteschlange/ Queue

$stack = [];
array_push($stack, 100);
array_push($stack, 200);
array_push($stack, 300);
array_push($stack, 400);
array_push($stack, 500);
array_push($stack, 600);

echo '<pre>';
print_r($stack);
echo PHP_EOL;

echo array_pop($stack); // Entfernt/Liefert das Element, das als letztes hinzugefügt wurde
echo PHP_EOL;

echo array_pop($stack);
echo PHP_EOL;

echo array_pop($stack);
echo PHP_EOL;

print_r($stack);
echo '</pre>';


$queue = [];
array_push($queue, 100);
$queue[] = 200; // gleichwertig
array_push($queue, 300);
array_push($queue, 400);
array_push($queue, 500);
array_push($queue, 600);

echo '<pre>';
print_r($queue);
echo PHP_EOL;

echo array_shift($queue); // Entfernt/Liefert das Element am Anfang der Warteschlange
echo PHP_EOL;

echo array_shift($queue); // Entfernt/Liefert das Element am Anfang der Warteschlange
echo PHP_EOL;

echo array_shift($queue); // Entfernt/Liefert das Element am Anfang der Warteschlange
echo PHP_EOL;

print_r($queue);
echo '</pre>';

