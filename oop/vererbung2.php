<?php

// Alle Klassen die Fahrzeug abgeleitet sind und Fahrzeug selbst sind als Typen möglich
// Alle anderen Klassen und primitive Datentypen werden abgelehnt
function printInfo(Fahrzeug $obj) {
    var_dump($obj);
    //$obj->personenTransportieren(); // Nicht sicher verfügbar!
    $obj->tankeAuf(); // Ist durch Verebung in allen Fahrzeugen verfügbar


    // Referenztyp = Typ der Variable $obj
    // Objekttyp = die echte Indentität des Ojektes im Speicher
    
    // Referenztyp sagt, welche Methoden sichtbar sind
    // Objekttyp ist für die Ausführung verantwortlich
}

class Fahrzeug {
    // Grundlegende Informationen/Fähigkeiten eines Fahrzeugs
    public function tankeAuf() {
        echo 'Fahrzeug wird aufgetankt<br>';
    }
}

// WasserFahrzeug IS-A Fahrzeug
class WasserFahrzeug extends Fahrzeug {
    // Erweitert ein Fahrzeug um Informationen/Fähigkeiten rund um Bewegung auf dem Wasser
    public function legeAn() {
        echo 'Fahrzeug legt an<br>';
    }
}

class LuftFahrzeug extends Fahrzeug {
    // Erweitert ein Fahrzeug um Informationen/Fähigkeiten rund um Bewegung in der Luft
    public function lande() {
        echo 'Fahrzeug landet<br>';
    }
}

class LandFahrzeug extends Fahrzeug {
    // Erweitert ein Fahrzeug um Informationen/Fähigkeiten rund um Bewegung auf dem Land
    public function befahreEineStrasse() {
        echo 'Fahrzeug befährt eine Strasse<br>';
    }
}


class SportBoot extends WasserFahrzeug {
    // Erweitert ein WasserFahrzeug um Informationen/Fähigkeiten eines Sport-Boots
    public function gibGas() {
        echo 'Sport-Boot gibt Gas<br>';
    }
}

// LinienFlugzeug IS-A LuftFahrzeug IS-A Fahrzeug
class LinienFlugzeug extends LuftFahrzeug {
    // Erweitert ein LuftFahrzeug um Informationen/Fähigkeiten eines LinienFlugzeug
    public function personenTransportieren() {
        echo 'LinienFlugzeug transportiert Personen<br>';
    }

    // Methode wird überschrieben - geerbte Originalmethode wird ersetzt
    public function tankeAuf()
    {
        echo 'LinienFlugzeug tankt eine große Menge Sprint auf<br>';
    }
}

printInfo(new LinienFlugzeug());
printInfo(new SportBoot());
printInfo(new LandFahrzeug());
//printInfo('Bla bla bla'); // string ist KEIN Fahrzeug