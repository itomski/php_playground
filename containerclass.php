<?php

class Kunde
{
    private $nr;
    private $vorname;
    private $nachname;

    public function __construct($nr, $vorname, $nachname)
    {
        $this->nr = $nr;
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getNr()
    {
        return $this->nr;
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }
}

class KundenRegister
{
    private $kunden = [];

    public function __construct()
    {
    }

    public function add(Kunde $kunde)
    {
        $this->kunden[] = $kunde;
    }

    public function getAll(): array
    {
        return $this->kunden;
    }
}

// $register = new KundenRegister();
// $register->add(new Kunde(1, 'Peter', 'Parker'));
// $register->add(new Kunde(2, 'Carol', 'Danvers'));
// $register->add(new Kunde(3, 'Bruce', 'Banner'));

// file_put_contents('kunden.db', serialize($register)); // Container mit Inhalt speichern

$register = unserialize(file_get_contents('kunden.db')); // Container mit seinen Daten lesen

foreach($register->getAll() as $kunde) {
    echo $kunde->getVorname().' '.$kunde->getNachname().'<br>';
}