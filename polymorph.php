<?php

$x = 100;

function checkValue(int $zahl) {
    // $zahl ist sicher ein int!!!
}

checkValue(100);

class Person {

    private $vorname;
    private $nachname;

    public function __construct(string $vorname, string $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function sagHallo(): string {
        return "Hallo! Mein Name ist {$this->vorname} {$this->nachname}";
    }
}

$p1 = new Person('Steve', 'Rogers');
echo $p1->sagHallo().'<br>';

function checkPerson(Person $person): bool {
    // $person ist IMMER vom Typ Person
    $str = $person->sagHallo(); // Es ist 100% sicher, dass diese Methode vorhanden ist
    // Für die Ausführung der Methode ist das "echte" Objekt zuständig

    if(strpos(strtolower($str), 'hallo') > -1) {
        return true;
    }
    return false;
}

echo checkPerson($p1);

// BusinessPerson IS-A Person
class BusinessPerson extends Person {

    private $position;

    public function __construct(string $vorname, string $nachname, string $position)
    {
        parent::__construct($vorname, $nachname); // Aufruf des Konstruktors der Elternklasse
        $this->position = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }

    // Die geerbte Klasse wird überschrieben
    public function sagHallo(): string
    {
        return "Guten Tag! Mein Name ist {$this->getVorname()} {$this->getNachname()}. Ich bin {$this->position}";
    }
}

$bp1 = new BusinessPerson('Carol', 'Danvers', 'CEO');

// BusinessPerson IS-A Person
// An einer Stelle, wo ein Person-Objekt verlangt wird, kann auch das Objekt jeder 
// Kindklasse von Person übergeben werden
echo checkPerson($bp1);