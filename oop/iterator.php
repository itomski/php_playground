<?php

abstract class AbstractIterator implements Iterator {

    protected array $data = [];
    private int $pos = 0;

    public function add(Fahrzeug $fahrzeug) {
        $this->data[] = $fahrzeug;
    }

    function valid(): bool {
        return isset($this->data[$this->pos]);
    }

    function current(): mixed {
        return $this->data[$this->pos];
    }

    function next(): void {
        $this->pos++;
    }

    function key(): mixed {
        return $this->pos;
    }

    function rewind(): void {
        $this->pos = 0;
    }
}

class Parkhaus extends AbstractIterator {

    private array $fahrzeuge = [];
    
    function __construct()
    {
        $this->data = &$this->fahrzeuge;
    }

    public function add(Fahrzeug $fahrzeug) {
        $this->fahrzeuge[] = $fahrzeug;
    }
}

class Fahrzeug {

    private string $kennzeichen;

    function __construct($kennzeichen)
    {
        $this->kennzeichen = $kennzeichen;
    }

    public function getKennzeichen()
    {
        return $this->kennzeichen;
    }
}
$p = new Parkhaus();
$p->add(new Fahrzeug('HH:AB123'));
$p->add(new Fahrzeug('HH:XY226'));
$p->add(new Fahrzeug('HH:BA997'));
$p->add(new Fahrzeug('HH:MC223'));
$p->add(new Fahrzeug('HH:XY789'));

/*
echo $p->key();
echo $p->next();
echo $p->key();
*/

foreach($p as $fahrzeug) {
    echo $fahrzeug->getKennzeichen().'<br>';
}