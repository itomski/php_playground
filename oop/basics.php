<pre>
<?php

$o1 = new stdClass();
var_dump($o1);

$o2 = (object) array(10, 15);
var_dump($o2);

$o3 = json_decode('{"vorname": "Peter", "nachname": "Parker"}');
var_dump($o3);

$o4 = new stdClass();
$o4->vorname = "Bruce";
$o4->nachname = "Banner";
// echo $arr['vorname']; // Beim Array
// echo $o4->vorname; // Beim Objekt
var_dump($o4);


$o5 = new class {
    public $vorname;
    public function sagHallo() {
        echo "Moin! Mein Name ist ".$this->vorname.'<br>';
    }
};
$o5->vorname = 'Natasha';
$o5->sagHallo();
var_dump($o5);

?>
</pre>
