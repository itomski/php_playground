<pre>
<?php

$liste1 = ['Peter', 'Bruce', 'Tony'];
$liste2 = ['Natasha', 'Carol'];

$liste = array_merge($liste1, $liste2);
print_r($liste);


$liste1 = ['a' => 'Peter', 'b' => 'Bruce', 'c' => 'Tony'];
$liste2 = ['a' => 'Natasha', 'b' => 'Carol'];

$liste = array_merge($liste1, $liste2);
print_r($liste);

echo PHP_EOL;

$liste1 = ['Peter', 'Bruce', 'Tony'];
$liste2 = ['Natasha', 'Carol'];

$liste = [$liste1, $liste2];
print_r($liste);

$liste = [...$liste1, ...$liste2];
print_r($liste);

echo PHP_EOL;

$liste1 = ['a' => 'Peter', 'b' => 'Bruce', 'c' => 'Tony'];
$liste2 = ['a' => 'Natasha', 'b' => 'Carol'];

$liste = [...$liste1, ...$liste2];
print_r($liste);

print_r($_SERVER);

?>
</pre>
