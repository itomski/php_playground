<?php

const FILE = __DIR__.'/data.txt';
echo FILE.'<br>';

// FILE_APPEND erweitert den Inhalt
// LOCK_EX Exclusives Schreiben. Datei wir für andere gesperrt
// Ist die Datei nicht vorhanden, wird sie beim Schreiben angelegt
//file_put_contents(FILE, "Das ist das Haus von Nikigraus\n", FILE_APPEND|LOCK_EX);


if(file_exists(FILE)) {
    // Datei muss verfügbar sein
    $content = file_get_contents(FILE);
    // nl2br Zeilenumbrüche werden in br-Tags umgewandelt
    echo nl2br($content);
}
else {
    echo 'Datei wurde nicht gefunden!';
}


const ARR_FILE = __DIR__.'/data_array.txt';

$personen = [
    [
        'vorname' => 'Peter',
        'nachname' => 'Parker',
        'hero' => 'Spiderman'
    ],
    [
        'vorname' => 'Bruce',
        'nachname' => 'Banner',
        'hero' => 'Hulk'
    ]
];

echo '<pre>';
print_r($personen);
echo '</pre>';

// serialize übersetzt komplexe Daten (Arrays, Objekte etc.) in Strings
//file_put_contents(ARR_FILE, serialize($personen));

// unserialize = Strings werden wieder in komplexe Strukturen übersetzt
$content = unserialize(file_get_contents(ARR_FILE));
//echo $content[0]['vorname'];

foreach($content as $hero) {
    echo $hero['vorname'].' '.$hero['nachname'].'<br>';
}