<?php

enum Faces {

    case W4;
    case W6;
    case W10;
    case W20;
    case W100;

    public function get(): int {

        return match($this) {
            Faces::W4 => 4,
            Faces::W6 => 6,
            Faces::W10 => 10,
            Faces::W20 => 20,
            Faces::W100 => 100,
        };
    }
}