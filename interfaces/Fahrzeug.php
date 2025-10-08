<?php

class Fahrzeug implements Movable {

    private string $kennzeichen;

    private array $pos = [0,0];

    // Weiteres Inventar

    function moveTo(int $x, int $y): bool {
        $this->pos[0] = $x;
        $this->pos[1] = $y;
        //...
        return true;
    }
}