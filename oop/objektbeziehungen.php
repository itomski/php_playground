<?php

// HAS-A: Ein Objekt enthält eine Referenz auf ein anderes
// (1:1, 1:n, n:m)

// IS-A: Vererbung

class Person {

    private string $vorname;
    private string $nachname;
    private array $freunde = []; // n:m

    public function __construct(string $vorname, string $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getVorname(): string {
        return $this->vorname;
    }

    public function getNachname(): string {
        return $this->nachname;
    }

    public function getFreunde(): array {
        return $this->freunde;
    }

    public function addFreund(Person $freund): void {
        if(!in_array($freund, $this->freunde)) { // Nur hinzufügen, wenn nicht bereits drin
            $this->freunde[] = $freund;
            $freund->addFreund($this);
        }
    }
}

$p1 = new Person('Peter', 'Parker');
$p2 = new Person('Bruce', 'Banner');
$p3 = new Person('Carol', 'Danvers');

$p1->addFreund($p2);
$p1->addFreund($p3);
$p3->addFreund($p2);

/*
echo '<pre>';
print_r($p1);
print_r($p2);
print_r($p3);
echo '</pre>';
*/

function printFriends(Person $p) {
    echo '<h2>Freunde von '.$p->getVorname().' '.$p->getNachname().'</h2>';
    echo '<ul>';
    foreach($p->getFreunde() as $freund) {
        echo '<li>'.$freund->getVorname().' '.$freund->getNachname().'</li>';
    }
    echo '</ul>';
}

printFriends($p1);
printFriends($p2);
printFriends($p3);