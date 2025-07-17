<?php

class Pilzsuche {

    private $groesse = 0;

    private $spielfeld = [];

    public function __construct(int $groesse)
    {
        $this->groesse = $groesse;
        $this->reset();
    }

    public function reset() {
        $this->spielfeld = [];
        for ($i=0; $i < $this->groesse; $i++) {
            $this->spielfeld[] = array_fill(0, $this->groesse, 0);
        }
    }

    public function pilzeZufaelligPlatzieren(int $anzahl) {
        
        for ($i=0; $i < $anzahl; $i++) { 
            $x = rand(0, $this->groesse - 1); // Zufallszahl für x
            $y = rand(0, $this->groesse - 1); // Zufallszahl für y
            if(!$this->setzePilz($x, $y)) {
                $i--; // Kann der Pilz nicht gesetzt werden, noch einmal versuchen
            }
        }
    }

    public function setzePilz(int $x, int $y): bool {
        // TODO: Positionen ab 1 bis ... statt 0 bis ... verwenden
        // Ein Pilz darf nur gesetzt werden, wenn x und y im gültigen Bereich liegen
        //if(($x >= 0 && $x < $this->groesse) && ($y >= 0 && $y < $this->groesse)) { // Validierung im DTO
            if($this->spielfeld[$x][$y] == 0) { // Pilz nur setzen, wenn das Feld leer ist
                $this->spielfeld[$x][$y] = 1;
                return true;
            }
        //}
        return false;
    }

    public function checkPilzAnPosition(int $x, int $y): bool {
        // TODO: Positionen ab 1 bis ... statt 0 bis ... verwenden
        //if(($x >= 0 && $x < $this->groesse) && ($y >= 0 && $y < $this->groesse)) { // Validierung im DTO
            if($this->spielfeld[$x][$y] == 1) {
                return true;
            }
        //}
        return false;
    }

    public function pilzEinsammeln(int $x, int $y): bool {
        if($this->checkPilzAnPosition($x, $y)) { // Wenn Pilz da ist
            $this->spielfeld[$x][$y] = 0; // ihn entfernen
            return true;
        }
        return false;
    }


    public function debugInfo() {
        echo '<pre>';
        print_r($this->spielfeld);
        echo '</pre>';
    }
}