<?php

function rollD6() {
    return rand(1, 6);
}

function rollD10() {
    return rand(1, 10);
}

function rollD100() {
    return rand(1, 100);
}

function rollDice($faces = 6) {
    return rand(1, $faces);
}