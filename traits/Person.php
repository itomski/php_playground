<?php

class Person {

    /*
    use DebugInfo, SystemDebug {
        SystemDebug::debug insteadof DebugInfo; // Die Methode von DebugInfo wird durch die Methode der anderen Klasse ersetzt
    }
    */    

    use DebugInfo, SystemDebug {
        SystemDebug::debug insteadof DebugInfo; // Zuerst den Konflikt auflösen
        DebugInfo::debug as defaultDebug; // Dann Methoden umbenennen
        SystemDebug::debug as systemDebug;
    }

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
}
