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

// 
class AbstractIterator implements Iterator
{
    private $pos = 0;
    private $elements = [];

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