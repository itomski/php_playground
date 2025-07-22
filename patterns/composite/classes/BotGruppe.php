<?php

//class BotGruppe extends Bot {
class BotGruppe implements Bot {
    // iplements = die Klasse wird verpflichtet die Methoden des Interface einzubauen

    private $bots = [];

    public function add(Bot $bot) { // Das Interface kann wie eine Klasse als Datentyp verwendet werden
        $this->bots[] = $bot;
    }

    public function doTheJob(): void
    {
        // Methodenaufruf wird an die Bots delegiert
        foreach($this->bots as $bot) {
            $bot->doTheJob();
        }   
    }
}