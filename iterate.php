<?php

$arr = [5, 7, 22, 18, 9, 15, 8, !10, 17];
foreach($arr as $v) {
    echo $v . '<br>';
}

echo '<hr>';

// Generator
function generate100Randoms($min, $max, $count)
{
    for($i = 0; $i < $count; $i++) {
        // yield verlässt die Methode nicht, sondern gibt den aktuellen Stand zurück
        yield rand($min, $max);
    }
}

foreach(generate100Randoms(1, 10, 5) as $v) {
    // Zufallszahl wird erzeugt und verbraucht, danach gehts zur nächsten Iteration
    echo $v . '<br>';
}

$rands = generate100Randoms(1, 10, 5);
// Werte werden produziert und in ein Array abgelegt

echo '<hr>';

abstract class AbstractIterator implements Iterator
{
    private $pos = 0;
    private $elements = [];

    public function __construct(array &$arr)
    {
        $this->elements = &$arr; // Elements ist eine Referenz auf das Array in der Kindklasse
    }

    public function current(): mixed {
        return $this->elements[$this->pos];
    }

    public function key(): mixed {
        return $this->pos;
    }

    public function next(): void {
        $this->pos++;
    }

    public function valid(): bool {
        return isset($this->elements[$this->pos]);
    }

    public function rewind(): void {
        $this->pos = 0;
    }
}

// Iteratoren
class KundenListe extends AbstractIterator
{
    private $kunden = [];

    public function __construct()
    {
        parent::__construct($this->kunden);
    }

    public function get(): array
    {
        return $this->kunden;
    }

    public function add(string $kunde): void
    {
        $this->kunden[] = $kunde;
    }
}

$list = new KundenListe();
$list->add('Peter');
$list->add('Carol');
$list->add('Bruce');

// KundenList Objekt kann wie eine Sammlung genutzt werden
foreach($list as $kunde) {
    echo $kunde.'<br>';
}

echo '<hr>';

class ZahlenListe extends AbstractIterator
{
    private $zahlen = [];

    public function __construct()
    {
        parent::__construct($this->zahlen);
    }

    public function get(): array
    {
        return $this->zahlen;
    }

    public function add(int $zahl): ZahlenListe
    {
        $this->zahlen[] = $zahl;
        return $this;
    }
}

$sammlung = new ZahlenListe();
$sammlung->add(10)->add(15)->add(22)->add(172);
foreach($sammlung as $v) {
    echo $v.'<br>';
}
