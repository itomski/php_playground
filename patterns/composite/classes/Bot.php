<?php

// abstract = Es können keine Objekte direkt von Bot erzeugt werden
// abstract class Bot {

//     // Eine abstrakte Klasse kann abstrakte Methoden enthalten
//     // Eine abstrakte Klasse kann Attribute enthalten
//     // Eine abstrakte Klasse kann private, public und protected Inventar (Attribute und Methoden) enthalten

//     abstract function doTheJob(); // abstract = Muss in den Kindklassen eingebaut werden
    
// }

interface Bot {

    // Bei einem Interface sind ALLE Methoden abstrakt
    // Bei einem Interface gibt es KEINE Attribute

    // Es werden nur Methoden-Signaturen verwendet
    function doTheJob(): void; // Schlüsselwort abstract ist nicht nötig
}

// Ein Interface ist 100% abstrakt

// Eine Klasse kann NUR von einer Klasse erben
// Sie kann aber mehrere Interfaces implementieren
// Ein Interface vererbt Anforderungen, die in den Kindklassen eingebaut werden MÜSSEN

// In einem Interface sind ALLE Methoden public!

// Interface sagt, welche Methoden eingebaut werden MÜSSEN
// aber nicht WIE sie eigebaut werden sollen