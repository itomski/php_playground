<?php

class Thing {

    private $v1;
    private $v2;

    function __construct($v1, $v2)
    {
        echo __METHOD__.'<br>';
        $this->v1 = $v1;
        $this->v2 = $v2;
    }

    // Wird automatisch aufgerufen, wenn eine nicht vorhandene Instanzmethode aufgerufen wird
    function __call($name, $arguments) // für Instanzmethoden
    {
        echo __METHOD__.'<br>';
        echo 'Gewünschte Methode: '.$name.'<br>';
        echo 'Argumente: '.implode(', ', $arguments).'<br>';

        $attr = strtolower(str_replace('get', '', $name));
        if(property_exists($this, $attr)) {
            echo '<h2>'.$this->$attr.'</h2>';
        }
    }

    // Wird automatisch aufgerufen, wenn eine nicht vorhandene Klassenmethode aufgerufen wird
    static function __callStatic($name, $arguments) // für Klassenmethoden
    {
        echo __METHOD__.'<br>';
        echo 'Gewünschte statische Methode: '.$name.'<br>';
        echo 'Argumente: '.implode(', ', $arguments).'<br>';
    }
}

$t1 = new Thing(20, 35);
try {
    $t1->machWas(10, 20); // Aufruf einer Instanzmethode
    $t1->getXyz();
    Thing::machWas('A', 'B'); // Aufruf einer Klassenmethode
}
catch(\Throwable $e) { // Throwable fähngt Errors und Exceptions ein
    echo '<p>Msg: '.$e->getMessage().'</p>';
}

echo '<p>ENDE</p>';