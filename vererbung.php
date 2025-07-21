<?php

class Lebewesen {

    private $name = 'Unbekannt';
    protected $x = 0;
    private $y = 0;
    private $alter;

    public function getY()
    {
        return $this->y;
    }

    public function getName()
    {
        return $this->name;
    }

    public function bewegeAnPos(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function info() {
        echo $this->name.', x:'.$this->x.', y:'.$this->y.'<br>';
    }

    // Wird automatisch aufgerufen, wenn das Objekt als string benötigt wird
    public function __toString() // Magische Methode
    {
        return $this->name.', x:'.$this->x.', y:'.$this->y.', alter: '.$this->alter;
    }
}

$lw1 = new Lebewesen();
echo $lw1.'<br>'; // toString wird verwendet
$lw1->info();
$lw1->bewegeAnPos(50, 25);
$lw1->info();

// Hund IS-A Lebewesen
class Hund extends Lebewesen {

    // Die Klasse Hund erbt die (nicht privaten) Eigenschaften und Methoden
    // von der Elternklasse

    private $farbe;

    public function __construct(string $farbe)
    {
        $this->farbe = $farbe;
    }

    // Privates Inventar der Elternklassen wird NICHT vererbt
    // kann aber dennoch engeschränkt verwendet werden

    // Protected = Inventar ist in den Kindklassen auch verwendbar

    public function bewegeX(int $x) {
        $this->x = $x;
    }

    // geerbte Methode von Lebewesen wird durch eine neue Variante ÜBERSCHRIEBEN
    public function __toString()
    {
        // Die Kindklasse kann über öffentliche Getter und Setter auf 
        // private Eigenschaften/Attribute zugreifen
        //return $this->getName().', x:'.$this->x.', y:'.$this->getY().', farbe: '.$this->farbe.' <br>';

        // Ruft die toString aus der Elternklasse auf und erweitert die Ausgabe
        // parent steht für ein Objekt der Elternklasse
        return parent::__toString().', farbe: '.$this->farbe.' <br>';
    }
}

// Hier können als Parameter Lebewesen-Objekte übergeben werden
// ABer auch die Objekte ALLER Kindklassen von Lebewesen

function asList(Lebewesen $obj) {
    $str = $obj->__toString(); // Methgode wird polimarphisch aufgerufen
    // Die Methode wird auf dem Objekt ausgeführt, welches auf dem Speicher liegt
    // d.h. es wird IMMER der echte Typ verwendet

    $parts = explode(', ', $str);
    echo '<ul>';
    foreach($parts as $part) {
        echo '<li>'.$part.'</li>';
    }
    echo '</ul>';
}

$hund = new Hund('gold');
$hund->bewegeX(100);
echo $hund.'<br>';

asList($hund); // Jeder Hund (IS-A) ist ein Lebewesen

asList($lw1); // Nicht jedes Lebewesen ist ein Hund!