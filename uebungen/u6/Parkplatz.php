<?php

class Parkplatz {

    private array $fahrzeuge = [];

    public function add(Fahrzeug $fahrzeug) {
        $this->fahrzeuge[] = $fahrzeug;
    }

    public function remove(string $kennzeichen): ?Fahrzeug {
        
        $i = $this->search($kennzeichen);
        if($i >= 0) {
            return array_splice($this->fahrzeuge, $i, 1)[0];
        }
        return null;
    }

    private function search(string $kennzeichen): int {
        
        for ($i=0; $i < count($this->fahrzeuge); $i++) { 
            if($kennzeichen == $this->fahrzeuge[$i]->getKennzeichen()) {
                return $i;
            }
        }
        return -1;
    }

    public function getFahrzeuge(): array
    {
        return $this->fahrzeuge;
    }
}