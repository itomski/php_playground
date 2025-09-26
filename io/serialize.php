<?php

$arr = [];
$arr[] = ['vorname' => 'Peter', 'nachname' => 'Parker'];
$arr[] = ['vorname' => 'Bruce', 'nachname' => 'Banner'];
$arr[] = ['vorname' => 'Carol', 'nachname' => 'Danvers'];
$arr[] = ['vorname' => 'Scott', 'nachname' => 'Lang'];

echo '<pre>';
print_r($arr);
echo '</pre>';

const FILE_NAME = 'array_content.txt';

// serialize übersetzt das Array in ein Text-Format
//file_put_contents(FILE_NAME, serialize($arr));

// unserialize rekonstruiert die komplexe Struktur
$data = unserialize(file_get_contents(FILE_NAME));
echo '<pre>';
print_r($data);
echo '</pre>';
