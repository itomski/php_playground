<?php

class Tier {

    // private = wird NICHT vererbt
    // protected = ist in der Kindklasse sichtbar
    // public = ist für alle sichtbar
    protected $name;
    protected $alter;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAlter($alter)
    {
        $this->alter = $alter;
    }

    public function gibLaut() {
        echo 'Noch nicht möglich!<br>';
    }

    public function nimmNahrungAuf() {
        echo 'Das Tier frisst!<br>';
    }
}

$t = new Tier();
$t->setName('Bob');
$t->setAlter(5);

print_r($t);

echo '<hr>';

// Hund erbt das (nicht private) Inventar (Attribute und Methoden) von Tier und erweitert es
class Hund extends Tier { 
    
    private $einsatzgebiet;

    public function setEinsatzgebiet($einsatzgebiet)
    {
        $this->einsatzgebiet = $einsatzgebiet;
    }

    public function showInfo() {
        // Sind die Attribute protected ist ein direkter Zugriff in der Kindklasse möglich
        echo $this->name.', '.$this->alter.', '.$this->einsatzgebiet.'<br>';
        
        // Sind die Attribute private, greift man über public oder protected Getter und Setter darauf zu
        //echo $this->getName().', '.$this->getAlter().', '.$this->einsatzgebiet.'<br>';
    }
}

$h = new Hund();
$h->setEinsatzgebiet('Sport');
$h->gibLaut();
$h->nimmNahrungAuf();
$h->showInfo();

print_r($h);

// HAS-A
// IS-A

if($h instanceof Tier) {
    echo '<p>JUP</p>';
}
else {
    echo '<p>NÖ</p>';
}

echo '<hr>';

class Katze extends Tier { // Hund erbt das Inventar (Attribute und Methoden) von Tier und erweitert es
    
    private $fellFarbe;

    public function setFellFarbe($fellFarbe)
    {
        $this->fellFarbe = $fellFarbe;
    }
}

$k = new Katze();
$k->setFellFarbe('Grau');
$k->setName('Pirat');
$k->setAlter(6);
$k->gibLaut();
$k->nimmNahrungAuf();
print_r($k);

if($k instanceof Tier) {
    echo '<p>JUP</p>';
}
else {
    echo '<p>NÖ</p>';
}

echo '<hr>';
