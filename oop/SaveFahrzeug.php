<?php

class SaveFahrzeug {

    // protected: Attribute sind nur innerhalb der gleichen Klasse oder ihren Kindklassen sichtbar
    // private: Attribute sind nur innerhalb der gleichen Klasse sichtbar
    private $kennzeichen;
    private $marke;
    private $modell;
    private $baujahr;
    private $fahrBereit;
    
    public function setKennzeichen(string $kennzeichen): void {
        // TODO: Validierung
        // $kennzeichen = lokale Variable
        // $this->kennzeichen = Instanzvariable
        if(strlen($kennzeichen) > 6 && strlen($kennzeichen) < 10)
            $this->kennzeichen = strtoupper($kennzeichen);
    }

    public function getKennzeichen(): string {
        return $this->kennzeichen;
    }

    public function __toString() {
        return sprintf("%s, %s, %s, %s, %s", 
                    $this->kennzeichen,
                    $this->marke,
                    $this->modell,
                    $this->baujahr,
                    ($this->fahrBereit) ? 'fahrbereit': 'nicht fahrbereit');
    }
}