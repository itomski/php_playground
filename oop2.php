<?php
declare(strict_types=1);

class Person {

    private $vorname = 'Unbekannt';
    private $nachname = 'Unbekannt';
    private $alter = -1;


    public function getVorname() : string // Lesen
    {
        return $this->vorname;
    }

    public function setVorname(string $vorname) // Schreiben
    {
        $this->vorname = $vorname;

        return $this;
    }
}

$p1 = new Person();
//$p1->vorname = 'Peter'; // Error. Eigenschaft ist private
$p1->setVorname('Peter'); // Schreiben
echo $p1->getVorname(); // Lesen

echo '<pre>';
print_r($p1);
echo '</pre>';