<?php




echo '<pre>';

$zahlen = [100,5,22,17,-8,250,6];
sort($zahlen);
print_r($zahlen);

echo PHP_EOL;

$namen = ['Bruce', 'Tony', 'Peter', 'Carol', 'carol'];
sort($namen);
print_r($namen);



$person = ['vorname' => 'Natasha', 'nachname' => 'Romanov', 'alter' => 35];
//sort($person); // Sortiert nach Values, verliert die Keys
//asort($person); // Sortiert nach Values, behält aber die Keys
ksort($person); // Sortiert nach Keys, behält die Values
print_r($person);


$zahlen1 = [7, 22, 18, 99];
$zahlen2 = [-10, 6, 15, 100];
//$zahlen1[] = $zahlen2; // falsch!
$zahlen3 = array_merge($zahlen1, $zahlen2); // richtig!
print_r($zahlen3);

// das Array als ganzes wird dem neuen Array hinzugefügt
//$zahlen1 = [$zahlen1, $zahlen2]; // falsch!

// ... inhalt des Arrays wird als einzelne Elemente dem neuen Array hinzugefügt
$zahlen1 = [...$zahlen1, ...$zahlen2]; // richtig!
print_r($zahlen1);

$coords1 = ['x' => 10, 'y' => 25];
$coords2 = ['z' => 100, 'y' => 30]; 
$summery = [...$coords1, ...$coords2, 'a' => 2000]; // 25 wird durch 30 überschrieben
print_r($summery);


echo '</pre>';