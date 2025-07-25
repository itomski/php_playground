<?php

namespace Kundenverwaltung\Entities;

/**
 * Beschreibung der Klasse
 * @author Tomasz Lubowiecki
 * @version 0.0.1
 */
class Person {

    private $vorname;

    private $nachname;

    /**
     * @param string $vorname Firstname of the Person
     * @param string $nachname Lastname of the Person
     */
    function __construct(string $vorname, string $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    /**
     * Gibt einen Text inkl. Vor- und Nachnamen zurück
     * @return string Eine Begrüßung
     */
    function gibHallo(): string {
        return 'Hallo, mein Name ist '.$this->vorname.' '.$this->nachname;
    }

    /**
     * Gibt den aktuellen Wert eines gewüschten Attributs
     * @param string $auswahl Name des Attributs
     * @return string|null Wenn Attribut bekannt ist wird sein Inhalt geliefert, sonst null
     */
    function gibWert(string $auswahl): ?string {
        $auswahl = strtolower($auswahl);
        if($auswahl == 'vorname' || $auswahl == 'nachname') {
            return $this->$auswahl;
        }
        return null;
    }
}