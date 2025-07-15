<?php

class Fahrzeug {

    // Datenkapselung = Alle Eigenschaften sind private 

    // Eigenschaften/Attribute = Beschreiben das Objekt / Sind der Zustand des Objekts
    // private, protected, public
    private $kennzeichen; // Instanzeigenschaft

    private $baujahr; // Instanzeigenschaft

    private $marke;

    private $modell;

    private $typ;

    private $zustand;

    // Konstante
    private const TYPEN = ['PKW', 'LKW'];
    
    
    public function getKennzeichen()
    {
        // $this = von diesem Objekt
        return $this->kennzeichen;
    }

    public function setKennzeichen($kennzeichen)
    {
        // $kennzeichen = Lokale Variable / Methoden-Parameter
        // $this->kennzeichen = Instanzeigenschaft
        // Lokale Variablen und Parameter werden am Ende der Methode entfernt
        // Instanzeigenschaften bleiben im Objekt erhalten
        $this->kennzeichen = $kennzeichen;
    }
     
    public function getBaujahr() 
    {
        return $this->baujahr;
    }

    public function setBaujahr($baujahr)
    {
        if($baujahr > 1900) {
            $this->baujahr = $baujahr;
        }
    }

    public function getMarke()
    {
        return $this->marke;
    }

    public function setMarke($marke)
    {
        $this->marke = $marke;
    }

    public function getModell()
    {
        return $this->modell;
    }

    public function setModell($modell)
    {
        $this->modell = $modell;
    }

    public function getZustand()
    {
        return $this->zustand;
    }

    public function setZustand($zustand)
    {
        $this->zustand = $zustand;
    }

    // automatisch public, wenn kein Zugriff definiert wird
    function printInfo() {
        echo '<pre>';
        print_r($this); // $this = Das Objekt für den die Methode aufgerufen wurde
        echo '</pre>';
    }

    public function getTyp()
    {
        return $this->typ;
    }

    public function setTyp($nr)
    {
        // Zugriff auf Konstanten über self
        $this->typ = self::TYPEN[$nr];
    }
}