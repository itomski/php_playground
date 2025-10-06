<?php

class Person {

    private string $vorname;
    private string $nachname;

    function __construct(string $vorname, string $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
        return $this;
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
        return $this;
    }

    public function getKuerzel()
    {
        return substr($this->vorname, 0, 1).'. '.substr($this->nachname, 0, 1);
    }
}