<?php

class Fahrzeug {

    private String $kennzeichen;

    private int $parkenStart;

    private int $parkenEnde;

    public function __construct(string $kennzeichen, ?int $parkenStart = null)
    {
        $this->kennzeichen = $kennzeichen;
        $this->parkenStart = $parkenStart ?? time();
    }
    
    public function getKennzeichen()
    {
        return $this->kennzeichen;
    }

    public function getParkenStart()
    {
        return $this->parkenStart;
    }

    public function getParkenEnde()
    {
        return $this->parkenEnde;
    }
    
    public function setParkenEnde($parkenEnde)
    {
        $this->parkenEnde = $parkenEnde;
    }

    public function getParkdauer(): int
    {
        return $this->parkenEnde - $this->parkenStart;
    }

    public function getType(): string
    {
        /*
        echo __DIR__.'<br>';    
        echo __FILE__.'<br>';    
        echo __FUNCTION__.'<br>';    
        echo __METHOD__.'<br>';
        echo __LINE__.'<br>';
        echo __CLASS__.'<br>';
        */
        return get_class($this);
    }
}