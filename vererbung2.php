<?php

abstract class Lebewesen {

    abstract public function gibLaut(): string; // Abstrakte Methoden sind nicht ausprogrammiert
    // Sie haben keinen Body
    // Muss in der Kindklasse eingebaut werden
}



class Hund extends Lebewesen {

    public function gibLaut(): string {
        return 'Wau! Wau!';
    }
}

class Katze extends Lebewesen{

    public function gibLaut(): string {
        return 'Miau! Miau!';
    }
}

class Vogel extends Lebewesen {

    public function gibLaut(): string {
        return 'Pip! Pip!';
    }
}

$hund = new Hund(); // Instanzierung
echo '<h2>'.$hund->gibLaut().'</h2>';

$katze = new Katze(); // Instanzierung
echo '<h2>'.$katze->gibLaut().'</h2>';

$vogel = new Vogel(); // Instanzierung
echo '<h2>'.$vogel->gibLaut().'</h2>';


$zoo = [];
$zoo[] = new Hund();
$zoo[] = new Katze();
$zoo[] = new Katze();
$zoo[] = new Katze();
$zoo[] = new Vogel();
$zoo[] = new Hund();
$zoo[] = new Hund();
//$zoo[] = new Lebewesen(); // Von abstrakten Klassen können KEINE Objekte erzeugt werden
// Eine abstrakte Klasse gilt als nicht vollständig

class TierListe {

    private $tiere = [];

    function add(Lebewesen $tier): void {
        $this->tiere[] = $tier;
    }

    function get(int $pos): Lebewesen {
        return $this->tiere[$pos];
    }

    function getAll(): array {
        return $this->tiere;
    }
}

$liste = new TierListe();
$liste->add(new Hund());
$liste->add(new Katze());
$liste->add(new Katze());
$liste->add(new Katze());
$liste->add(new Vogel());
$liste->add(new Hund());
$liste->add(new Hund());



function gibLaute(TierListe $tiere) {
    foreach($tiere->getAll() as $tier) {
        echo '<h2>'.$tier->gibLaut().'</h2>';
    }
}

//gibLaute($zoo); // ist keine Tierliste
gibLaute($liste);
