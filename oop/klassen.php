<pre>
<?php

class Buch {
    public $titel;
    public $autor;
    public $isbn;
}

class WasserFahrzeug {
    public $kennzeichen;
    public $besitzer;
    public $leistung;
}

$b1 = new Buch(); // Instanz ist das gleiche wie Objekt
$w1 = new WasserFahrzeug();
var_dump($b1, $w1);

echo $b1->isbn;

$b2 = ['titel' => 'Backen ohne Fett', 'autor' => 'Peter Parker'];
var_dump($b2);

echo $b2['isbn'];

$b3 = ['Backen ohne Fett', 'Peter Parker', '1234-5678-9012'];
var_dump($b3);

?>
</pre>