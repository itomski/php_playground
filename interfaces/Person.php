<?php

class Person implements Movable {

    private string $vorname;
    private string $nachname;

    private int $x;
    private int $y;

    // Weiteres Inventar

    function moveTo(int $x, int $y): bool {
        $this->x = $x;
        $this->y = $y;
        //...
        return true;
    }
}