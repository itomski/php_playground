<pre>
<?php

$heros = [];
$heros[] = ['vorname' => 'Peter', 'nachname' => 'Parker', 'alter' => 25, 'nic' => 'Spiderman'];
$heros[] = ['vorname' => 'Bruce', 'nachname' => 'Banner', 'alter' => 32, 'nic' => 'Hulk'];
$heros[] = ['vorname' => 'Natasha', 'nachname' => 'Romanov', 'alter' => 27, 'nic' => 'Black Widow'];
print_r($heros);
echo $heros[2]['nic'];
echo PHP_EOL;

$heros2 = [
    ['vorname' => 'Peter', 'nachname' => 'Parker', 'alter' => 25, 'nic' => 'Spiderman', 'aktiv' => true],
    ['vorname' => 'Bruce', 'nachname' => 'Banner', 'alter' => 32, 'nic' => 'Hulk', 'aktiv' => false],
    ['vorname' => 'Natasha', 'nachname' => 'Romanov', 'alter' => 27, 'nic' => 'Black Widow', 'aktiv' => true]
];
print_r($heros2);
echo $heros2[2]['nic'];
echo PHP_EOL;

echo $heros2[2]['ort'] ?? 'Unbekannt';

?>
</pre>