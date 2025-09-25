<pre>
<?php

$werte = ['b','x','A','Z','B'];
print_r($werte);
sort($werte);
print_r($werte);

echo PHP_EOL;

$werte = ['b' => 'Peter', 'x' => 'Bruce', 'a' => 'Carol'];
print_r($werte);
sort($werte); // Beim sortieren gehen die Schlüssel verloren - wird nach Wert sortiert
print_r($werte);

echo PHP_EOL;

$werte = ['b' => 'Peter', 'x' => 'Bruce', 'a' => 'Carol'];
print_r($werte);
asort($werte); // Schlüssel werden beibehalten - wird nach Wert sortiert
print_r($werte);

echo PHP_EOL;

$werte = ['b' => 'Peter', 'x' => 'Bruce', 'a' => 'Carol'];
print_r($werte);
ksort($werte); // Schlüssel werden beibehalten - wird nach Schlüsseln sortiert
print_r($werte);

echo PHP_EOL;

$werte = ['b' => 'Peter', 'x' => 'Bruce', 'a' => 'Carol'];
print_r($werte);
krsort($werte); // Schlüssel werden beibehalten - wird nach Schlüsseln reverse sortiert
print_r($werte);
?>
</pre>