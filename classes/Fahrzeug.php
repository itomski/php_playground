<?php

class Fahrzeug {

    // Datenkapselung = Alle Eigenschaften sind private/protected

    // Eigenschaften/Attribute = Beschreiben das Objekt / Sind der Zustand des Objekts
    // private, protected, public
    private $kennzeichen; // Instanzeigenschaft

    private $baujahr = 1900; // Instanzeigenschaft

    private $marke;

    private $modell;

    // protected = Nur dieses Objekt (und seine Methoden) und erbende Objekte dürfen diese Information lesen
    protected $typ;

    // private = Nur dieses Objekt (und seine Methoden) darf diese Information lesen
    private $zustand;

    private $preis;

    private $fahrbereit = true;

    // Konstante
    //private const TYPEN = ['PKW', 'LKW'];
    
    // Funktionen, die zu einer Klasse gehören nennt man Methoden
    // Instanzmethoden über ein Objekt aufgerufen werden

    // Instanzmethoden gehören dem Objekt
    // Klassenmethoden gehören dem Bauplan (Klasse) 
    
    // Getter: Lieset den internen Zustand aus und gibt ihn an den Aufrufer der Methode
    public function getKennzeichen(): string 
    {
        // $this = von diesem Objekt
        return $this->kennzeichen;
    }

    public function setKennzeichen(string $kennzeichen): void
    {
        // $kennzeichen = Lokale Variable / Methoden-Parameter
        // $this->kennzeichen = Instanzeigenschaft
        // Lokale Variablen und Parameter werden am Ende der Methode entfernt
        // Instanzeigenschaften bleiben im Objekt erhalten
        // Format für das Kennzeichen könnte mit regulären Ausdrücken geprüft werden
        $this->kennzeichen = strtoupper(trim($kennzeichen)); // Daten anpassen
    }
     
    public function getBaujahr(): int 
    {
        return $this->baujahr;
    }

    public function setBaujahr(int $baujahr): void
    {
        if($baujahr > 1900) {
            $this->baujahr = $baujahr;
        }
    }

    public function getMarke() : string
    {
        return $this->marke;
    }

    public function setMarke(string $marke): Fahrzeug
    {
        $this->marke = $marke;
        return $this; // das $this ist vom Typo Fahrzeug
    }

    public function getModell(): string
    {
        return $this->modell;
    }

    public function setModell(string $modell): Fahrzeug
    {
        $this->modell = $modell;
        return $this;
    }

    public function getZustand()
    {
        return $this->zustand;
    }

    public function setZustand($zustand)
    {
        $this->zustand = $zustand;
    }

    // automatisch public, wenn kein Zugriff definiert wird
    function printInfo() {
        echo '<pre>';
        print_r($this); // $this = Das Objekt für den die Methode aufgerufen wurde
        echo '</pre>';
    }

    // public function getTyp()
    // {
    //     return $this->typ;
    // }

    // public function setTyp($nr)
    // {
    //     // Zugriff auf Konstanten über self
    //     $this->typ = self::TYPEN[$nr];
    // }

    public function isFahrbereit(): bool
    {
        return $this->fahrbereit;
    }

    public function getPreisNetto()
    {
        return $this->preis;
    }

    public function setPreisNetto($preis)
    {
        $this->preis = $preis;
    }

    public function getPreisBrutto()
    {
        return $this->preis * 1.19;
    }

    public function setPreisBrutto($preis)
    {
        $this->preis = ($preis / 119) * 100;
    }
}