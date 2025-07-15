<?php

// Model

class Task {

    private $name;

    private $beschreibung;

    private $erzeugtAm;
    
    private $erledigt = false;

    private const DATE_FMT = 'd.m.Y';


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Task
    {
        $this->name = $name;
        return $this;
    }

    public function getBeschreibung(): string
    {
        return $this->beschreibung;
    }

    public function setBeschreibung(string $beschreibung): Task
    {
        $this->beschreibung = $beschreibung;
        return $this;
    }

    public function getErzeugtAm(): int
    {
        return $this->erzeugtAm;
    }

    public function getErzeugtAmFormatted(): string
    {
        return date(self::DATE_FMT, $this->erzeugtAm);
    }

    public function setErzeugtAm(int $erzeugtAm): Task
    {
        $this->erzeugtAm = $erzeugtAm;
        return $this;
    }

    public function isErledigt()
    {
        return $this->erledigt;
    }

    public function setErledigt(bool $erledigt): Task
    {
        $this->erledigt = $erledigt;
        return $this;
    }
}