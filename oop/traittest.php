<?php

trait DebugPrinter {

    public function debug() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}

trait SomethingElse {

    // Attribute und andere Methoden
    // kann mit use auch ein anderes Trait beinhalten

    public function doSomething() {
        echo '<h1>......</h1>';
    }
}

class Person {

    use DebugPrinter; // Trait wird eingebunden

    private string $vorname;
    private string $nachname;

    function __construct($vorname, $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }
}

class Fahrzeug {

    // Jede Klasse 0 bis n Traits einginden
    use DebugPrinter, SomethingElse;

    private string $marke;
    private string $modell;

    function __construct($marke, $modell)
    {
        $this->marke = $marke;
        $this->modell = $modell;
    }
}

$p = new Person('Carol', 'Danvers');
$p->debug();

$f = new Fahrzeug('Ford', 'Mustang');
$f->debug();
$f->doSomething();