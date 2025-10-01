<?php

class Fahrzeug { // Klassenname: PascalCase

    // Instanz-Attribute: Sinf für alle Instanzmethoden sichbar, solange das Obejekt verfügbar ist
    public $kennzeichen; // Attribute u. Methoden: camelCase
    public $marke;
    public $modell;
    public $baujahr;
    public $fahrBereit;
    public $checks = [];

    // Instanzmethode
    public function print(): void {
        echo '<pre>';
        // $this = Referenz auf dieses Objekt auf dem die Methode gerade ausgeführt wird
        print_r($this);
        echo '</pre>';
    }

    public function printChecks(): void {
        echo '<ul>';
        foreach($this->checks as $datum => $beschreibung) {
            echo '<li>'.date('d.m.y', $datum).': '.$beschreibung.'</li>';
        }
        echo '</ul>';
    }


    public function getBaujahr(): int {
        // Lokale Variable/Methoden Parameter: Sind nur in dieser Methode sichtbar. Bis Ende der Methode.
        $baujahr = 2000; // Deklaration und Initialisierung einer lokalen Variable
        //return $baujahr;
        return $this->baujahr; // Zugriff auf die Instanzvariable
    }

    // Magische Methode, wird automatisch aufgerufen
    public function __toString() { //
        return sprintf("%s, %s, %s, %s, %s", 
                    $this->kennzeichen,
                    $this->marke,
                    $this->modell,
                    $this->baujahr,
                    ($this->fahrBereit) ? 'fahrbereit': 'nicht fahrbereit');
    }
}