<?php

$data = ['name' => 'Peter', 'nachname' => 'Parker', 'alter' => 25, 'hero' => 'Spiderman'];

// Kann konkrete und anstrakte Methoden entahten
// Kann NICHT instanziert werden
abstract class ArrayPrinter {

    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    protected function getData() {
        return $this->data;
    }

    // Abstrakte Methoden müssen vor der Verwendung in den Unterklassen implementiert werden
    public abstract function print(); // abstract: nicht ausprogrammiert
}

class PlainPrinter extends ArrayPrinter { // print-Methode muss eingebaut werden

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function print() {
        foreach($this->getData() as $k => $v) {
            echo $k.' = '.$v.'<br>';
        }
    }
}

// Veränderung durch Vererbung
class JsonPrinter extends ArrayPrinter {

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function print() {
        echo json_encode($this->getData());
    }
}

class HTMLPrinter extends ArrayPrinter {

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function print() {
        echo '<ul>';
        foreach($this->getData() as $v) {
            echo '<li>'.$v.'</li>';
        }
        echo '</ul>';
    }
}

$printer = new ArrayPrinter($data);
//$printer = new PlainPrinter($data);
//$printer = new JsonPrinter($data);
//$printer = new HTMLPrinter($data);


function doTheJob(ArrayPrinter $printer) {
    $printer->print();
}
doTheJob($printer);




