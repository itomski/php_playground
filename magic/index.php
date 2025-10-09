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

    function __destruct()
    {
        echo __METHOD__.'<br>';
    }
}

$t1 = new Thing(10, 20); // __construct wird automatisch aufgerufen
var_dump($t1);

echo '<br>';

//unset($t1); // __destruct wird aufgerufen

$t2 = $t1;
unset($t1); // Objekt wird nicht zerstört, da noch t2 darauf zeigt

var_dump($t2);
// hier wird das Objekt zerstört __destruct wird aufgerufen