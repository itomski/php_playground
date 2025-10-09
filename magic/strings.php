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

    function __toString(): string
    {
        echo __METHOD__.'<br>';
        return 'Thing: '.$this->v1.', '.$this->v2;
    }

    function __debugInfo()
    {
        echo __METHOD__.'<br>';
        return get_object_vars($this);
    }
}

$t1 = new Thing(50, 100);
echo $t1; // __toString wird automatisch verwendet
$s1 = (string) $t1; // __toString wird automatisch verwendet
echo $s1;
echo 'Das ist das...'.$t1; // __toString wird automatisch verwendet

echo '<hr>';
var_dump($t1); // __debugInfo wird automatisch verwendet
print_r($t1); // __debugInfo wird automatisch verwendet