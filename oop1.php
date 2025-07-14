<?php

// Ein Array kann jederzeit seine Struktur verändern
// Keine garantierte Typsicherheit
$person1 = [
    'vorname' => 'Peter',
    'nachname' => 'Parker'
];

$person2 = [
    'vorname' => 'Bruce',
    'nachname' => 'Banner'
];

// Array kann verändert werden, so dass die Daten säpäter nicht mehr vorhanden sind
// oder dass sie umfangreicher sind

// Klassen sichern eine Struktur zu
// Bieten Typsicherheit

// Namen von Klassen beginnen mit Großbuchstaben
class Person {

    // Eigenschaften - Beschreiben das Objekt / Sind der aktuelle Zustand des Objekts
    public $vorname = 'Unbekannt'; // defaultwert
    public $nachname = 'Unbekannt'; // defaultwert
    public $alter = -1; // defaultwert

    // Methoden - Fähigkeiten des Objekts
        // Methoden sind Funktionen, die zu einem Objekt gehören
}

$p1 = new Person(); // Instanzierung oder Objekterzeugung
$p2 = new Person(); // Instanzierung oder Objekterzeugung
$p3 = new Person(); // Instanzierung oder Objekterzeugung

// Verändert NUR die Eigenschaften von $p2
$p2->vorname = 11;
$p2->nachname = 'Parker';
$p2->alter = 20.5;

echo gettype($p2);

echo '<pre>';
print_r($p1);
print_r($p2);
print_r($p3);
echo '</pre>';