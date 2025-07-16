<?php

// Objektbeziehungen
// IS-A: Wird durch Vererbung herbeigeführt
// HAS-A: Ein Objekjt enthält ein anderes Objekt (oder mehrere) in einem Arreibut

class Person {

    // Instanzvariable: Lebt so lange, wie das Objekt
    private $vorname;

    private $nachname;

    // HAS-A
    private $freunde = [];

    // Beim Bauen des Objektes mit new werden zwei Informationen verlangt
    public function __construct(string $vorname, string $nachname) // Konstruktor
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function setVorname($vorname)
    {
        //$vorname = Lokale Variable: Leben bis zum Ende dieser Methode
        $this->vorname = $vorname; // Wert aus der lokalen Variable wird in die Instanzvariable übertragen
        return $this;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
        return $this;
    }

    public function getFreunde(): array
    {
        return $this->freunde;
    }

    public function addFreund(Person $freund)
    {
        echo '<p>Ein neuer Freund wurde hinzugefügt: '.$freund->getVorname().' '.$freund->getNachname().'</p>';
        $this->freunde[] = $freund;
    }

    public function zeigeFreunde()
    {
        foreach($this->freunde as $freund) {
            echo '<p>'.$freund->getVorname().' '.$freund->getNachname().'</p>';
        }
    }
}

// Als Parameter ist nur ein Objekt der Person-Klasse erlaubt
function zeigePerson(Person $person) { // Den Typ so gut wie möglich einschränken
    echo '<pre>';
    print_r($person);
    echo '</pre>';
}

$p1 = new Person('Peter', 'Parker');
//$p1->setVorname('Peter');
//$p1->setNachname('Parker');

$p2 = new Person('Bruce', 'Banner');
//$p2->setVorname('Bruce');
//$p2->setNachname('Banner');

$p3 = new Person('Carol', 'Danvers');
//$p3->setVorname('Carol');
//$p3->setNachname('Danvers');

$p1->addFreund($p2);
$p1->addFreund($p3);

zeigePerson($p1);
// zeigePerson(123);
// zeigePerson('Bruce');

$p1->zeigeFreunde();