<?php

class Pilzsuche {

    private $groesse = 0;

    private $spielfeld = [];

    public function __construct(int $groesse)
    {
        $this->groesse = $groesse;

        for ($i=0; $i < $this->groesse; $i++) { // 5 Zeilen
            $this->spielfeld[] = array_fill(0, $this->groesse, null); // 5 Zellen
        }
    }

    public function setzePilz(int $x, int $y): bool {
        // Ein Pilz darf nur gesetzt werden, wenn x und y im gültigen Bereich liegen
        if(($x >= 0 && $x < $this->groesse) && ($y >= 0 && $y < $this->groesse)) {
            $this->spielfeld[$x][$y] = 1;
            return true;
        }
        return false;
    }

    public function checkPilzAnPosition(int $x, int $y): bool {
        if(($x >= 0 && $x < $this->groesse) && ($y >= 0 && $y < $this->groesse)) {
            if($this->spielfeld[$x][$y] == 1) {
                return true;
            }
        }
        return false;
    }

    public function debugInfo() {
        echo '<pre>';
        print_r($this->spielfeld);
        echo '</pre>';
    }
}