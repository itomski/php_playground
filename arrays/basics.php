<pre>
<?php

//$zahlen = [10, 15, 22, 8, -2, 9, 100, 101];
$zahlen = array(10, 15, 22, 8, -2, 9, 100, 101);
//var_dump($zahlen);
print_r($zahlen);

$zahlen = []; // Leer
//$zahlen = array();
$zahlen[] = 10; // Element an die nächste freie Stelle ablegen
$zahlen[] = 22;
$zahlen[1] = 100; // Element überschreibt den Wert an gewünschter Stelle
$zahlen[100] = 7;
$zahlen[] = -2; // Landet auf 101
$zahlen[10] = 9;
print_r($zahlen);

echo $zahlen[100].PHP_EOL;
echo $zahlen[3].PHP_EOL; // Warning: Undefined array key 3
echo ($zahlen[3] ?? 'Leer').PHP_EOL;


$person = ['Peter', 'Parker', 25, 'New York', 'Spiderman'];
print_r($person);

$person = ['vorname' => 'Peter', 
            'nachname' => 'Parker', 
            'alter' => 25, 
            'wohnort' => 'New York', 
            'held_name' => 'Spiderman'];
print_r($person);
echo $person['vorname'];


?>
</pre>