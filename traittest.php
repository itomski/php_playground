<?php

trait Reflect {

    public function durchleuchten() {
        $ref = new ReflectionClass(__CLASS__);
        echo '<h2>'.$ref->getName().'</h2>';
        echo '<ul>';
        foreach($ref->getMethods() as $method) {
            echo '<li>'.$method->getName().'</li>';
        }
        echo '</ul>';
    }
}

trait CreatedAt {

    private $created;

    public function printCreatedAt() {
        $fmt = 'd.m.Y';
        echo date($fmt, $this->created);
    }

    public function setCreated() {
        $this->created = time();
    }
}

trait A { // Wiederverwendbare Anweisungen

    protected $aStr;

    public function getAStr()
    {
        return $this->aStr;
    }

    public function setAStr($aStr)
    {
        $this->aStr = $aStr;
    }
}

trait B { // Wiederverwendbare Anweisungen

    protected $bStr;

    public function getBStr()
    {
        return $this->bStr;
    }

    public function setBStr($bStr)
    {
        $this->bStr = $bStr;
    }
}

class Ab { // Es kann nur von einer Klasse geerbt werden

    protected $abStr;

    use CreatedAt;

    // Es können mehrere Traits eingebunden werden

    use A; // Bindet hier den Sourcecode aus dem Trait A

    use B; // Bindet hier den Sourcecode aus dem Trait B

    use Reflect;

    function __construct()
    {
        $this->setCreated();
    }

    public function getAbStr()
    {
        return $this->abStr;
    }

    public function setAbStr($abStr)
    {
        $this->abStr = $abStr;
    }
}

class Fahrzeug {

    protected $kennzeichen;
    protected $marke;
    protected $modell;
    protected $baujahr;

    use Reflect;
    
    use CreatedAt;

    function __construct()
    {
        $this->setCreated();
    }

    public function getBaujahr()
    {
        return $this->baujahr;
    }

    public function setBaujahr($baujahr)
    {
        $this->baujahr = $baujahr;
    }
}

$ab = new Ab();
$ab->setAStr('Hi A');
$ab->setBStr('Hi B');
$ab->setAbStr('Hi AB');
echo $ab->getAStr().'<br>';
echo $ab->getBStr().'<br>';
echo $ab->getAbStr().'<br>';
$ab->durchleuchten();
$ab->printCreatedAt();

echo '<br>';

$fahrzeug = new Fahrzeug();
$fahrzeug->durchleuchten();
$fahrzeug->printCreatedAt();