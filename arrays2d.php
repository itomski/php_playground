<?php

$personen = []; // Leeres Array
// Elemente hinzufügen
$personen[] = ['vorname' => 'Peter', 'nachname' => 'Parker', 'features' => ['springen', 'gefahr erkennen']];
$personen[] = ['vorname' => 'Carol', 'nachname' => 'Danvers', 'features' => ['fliegen', 'energiestoß']];
$personen[] = ['vorname' => 'Bruce', 'nachname' => 'Banner'];
$personen[] = ['vorname' => 'Steve', 'nachname' => 'Rogers'];
$personen[] = ['vorname' => 'Natasha', 'nachname' => 'Romanov'];

// oder so
$personen = [
    [
        'vorname' => 'Peter', 
        'nachname' => 'Parker', 
        'features' => ['springen', 'gefahr erkennen']
    ],
    [
        'vorname' => 'Carol', 
        'nachname' => 'Danvers', 
        'features' => ['fliegen', 'energiestoß']
    ],
    [
        'vorname' => 'Bruce', 
        'nachname' => 'Banner'
    ],
    [
        'vorname' => 'Steve', 
        'nachname' => 'Rogers'
    ],
    [
        'vorname' => 'Natasha', 
        'nachname' => 'Romanov'
    ]
];


echo '<pre>';
print_r($personen);
echo '</pre>';

echo $personen[4]['vorname'].' '.$personen[4]['nachname'];
echo '<br>';