<pre>
<?php

$zahlen = [7,9,22,18,100,-5,3];

//echo in_array(3, $zahlen);

// Stack (Stapel): LIFO
$stack = [];
array_push($stack, 10, 20, 30, 40);
$stack[] = 50;
print_r($stack);
echo array_pop($stack).PHP_EOL;
print_r($stack);
echo array_pop($stack).PHP_EOL;
print_r($stack);
echo array_pop($stack).PHP_EOL;
print_r($stack);
echo array_pop($stack).PHP_EOL;
print_r($stack);
echo array_pop($stack).PHP_EOL;
print_r($stack);
echo array_pop($stack).PHP_EOL;
print_r($stack);

echo '<hr>';

// Queue (Warteschlange): FIFO
$queue = [];
array_push($queue, 10, 20, 30, 40);
echo array_shift($queue).PHP_EOL;
print_r($queue);
echo array_shift($queue).PHP_EOL;
print_r($queue);
echo array_shift($queue).PHP_EOL;
print_r($queue);
echo array_shift($queue).PHP_EOL;
print_r($queue);
echo array_shift($queue).PHP_EOL;
print_r($queue);

echo '<hr>';

// Dequeue (Warteschlange): Zugriff von beiden Seiten möglich
$dequeue = [];
array_push($dequeue, 10, 20, 30, 40);
echo array_shift($dequeue).PHP_EOL;
print_r($dequeue);
array_unshift($dequeue, 5, 3);
print_r($dequeue);

// List (Zugriff über einen Index): Numerisches Array

// Maps (Schlüssel-Wert-Paare): assoziative Arrays

// Set (Mengen = Keine Duplikate)

?>
</pre>