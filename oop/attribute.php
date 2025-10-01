<?php
echo '<pre>';

class Person {
    public string $vorname = '';
    public string $nachname = '';
    public int $geburtsDatum = 0;
    public string $beruf = 'Unbekannt';
}

$p = new Person();
echo $p->vorname.'<br>'; // Uncaught Error: wenn nicht initialisiert
echo var_dump($p);

$p1 = new Person();
$p1->vorname = 'Bruce';
//$p1->vorname = 10.5; // Wenn keine Typisierung vorhanden ist eine Zuweisung falscher Typen möglich
$p1->nachname = 'Banner';
$p1->geburtsDatum = strtotime('25.07.1985');
// $p1->geburtsDatum = '25.07.1985'; // Uncaught TypeError
$p1->beruf = 'Physiker';

$p2 = new Person();
$p2->vorname = 'Bruce';
$p2->nachname = 'Banner';
$p2->geburtsDatum = strtotime('25.07.1985');
$p2->beruf = 'Physiker';

echo '<hr>';

$p3 = $p1;

echo var_dump($p1);
echo var_dump($p2);
echo var_dump($p3);
echo var_dump($p1 == $p2); // Gleichheit: Gleicher Typ und Inhalt
echo var_dump($p1 === $p2); // Identität: Referenzen auf unterschiedliche Objekte
echo var_dump($p1 === $p3); // Identität: 2 Referenzen auf das gleich Objekt

echo '<hr>';

print_r($p1);
// echo $p1; // Error: Objekt kann nicht automatisch in ein String konvertiert werden

function printPerson(Person $person): void {
    printf("<p>Vorname: %s<br>
            Nachname: %s<br>
            Geburtsdatum: %s<br>
            Beruf: %s</p>", 
            $person->vorname, $person->nachname, date('d.m.y', $person->geburtsDatum), $person->beruf);  
}

printPerson($p1);
//printPerson(new stdClass());

echo '</pre>';