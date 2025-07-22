<?php

class BotGruppe extends Bot {

    private $bots = [];

    public function add(Bot $bot) {
        $this->bots[] = $bot;
    }

    public function doTheJob()
    {
        // Methodenaufruf wird an die Bots delegiert
        foreach($this->bots as $bot) {
            $bot->doTheJob();
        }   
    }
}