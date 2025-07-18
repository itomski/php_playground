<?php

class Lebewesen {

    private $name = 'Unbekannt';
    private $x = 0;
    private $y = 0;

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
        return $this->name.', x:'.$this->x.', y:'.$this->y.'<br>';
    }
}

$lw1 = new Lebewesen();
echo $lw1;
$lw1->info();
$lw1->bewegeAnPos(50, 25);
$lw1->info();