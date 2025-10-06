<?php

enum Antrib {
    case ELEKTRO;
    case DIESEL;
    case BENZIN;
    case HYBRID;
}

class Motor {

    private Antrib $antrieb;
    private int $leistung;

    function __construct(Antrib $antrieb, int $leistung)
    {
        $this->antrieb = $antrieb;
        $this->leistung = $leistung;
    }

    public function getAntrieb()
    {
        return $this->antrieb;
    }

    public function getLeistung()
    {
        return $this->leistung;
    }
}


class Fahrzeug {

    private string $kennzeichen;

    private string $marke;

    private string $modell;

    private Motor $motor;

    function __construct(string $kennzeichen, string $marke, string $model, int $leistung, Antrib $antrieb = null)
    {
        $this->kennzeichen = $kennzeichen;
        $this->marke = $marke;
        $this->modell = $model;
        $this->motor = new Motor(($antrieb ?? Antrib::BENZIN), $leistung);
    }

    public function getKennzeichen()
    {
        return $this->kennzeichen;
    }

    // Anfrage wird an das Motor-Objekt delegiert
    public function getAntrieb() {
        return $this->motor->getAntrieb();
    }
}

$f = new Fahrzeug('HH:AB123', 'Renault', 'Zoe', 75);

echo '<pre>';
print_r($f->getAntrieb());
echo '</pre>';