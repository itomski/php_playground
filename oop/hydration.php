<?php

trait Populate {

    function populate(array $data) {

        foreach($data as $k => $v) {
            $setter = 'set'.ucfirst($k);
            if(method_exists($this, $setter)) {
                $this->$setter($v);
            }
        }
    }
}

class Person {

    private string $vorname;
    private string $nachname;
    private DateTime $geburtsDatum;
    private bool $aktiv;

    use Populate;

    function __construct(array $data = [])
    {
        if(!empty($data)) {
            $this->populate($data);
        }
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }

    public function getGeburtsDatum()
    {
        return $this->geburtsDatum;
    }

    public function setGeburtsDatum($geburtsDatum)
    {
        $this->geburtsDatum = $geburtsDatum;
    }

    public function isAktiv()
    {
        return $this->aktiv;
    }

    public function setAktiv($aktiv)
    {
        $this->aktiv = $aktiv;
    }
}

$p1 = new Person(['vorname' => 'Peter', 
                    'nachname' => 'Parker', 
                    'geburtsDatum' => new DateTime('1992-10-22'), 
                    'aktiv' => true]);
echo '<pre>';
var_dump($p1);
echo '</pre>';

$p1->populate(['nachname' => 'Banner', 'aktiv' => false]);
echo '<pre>';
var_dump($p1);
echo '</pre>';