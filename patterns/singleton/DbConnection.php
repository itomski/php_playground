<?php

class DbConnection {

    // Klassenvariable: Gehört der Klasse NICHT den Objekten
    private static $instance;
    
    private $requestCout = 0;

    // Der Singleton kontrolliert die Objekterzeugung
    private function __construct()
    {
    }

    // Klassenmethode
    public static function getInstance(): DbConnection  {
        if(self::$instance == null) {
            self::$instance = new DbConnection();
        }
        return self::$instance; // Zugriff auf eine Klassenvariable
    }

    // Configuration

    // Instanzmethode
    function startRequest() {
        $this->requestCout++;
        echo 'Anfrage wird ausgeführt!';
    }
}