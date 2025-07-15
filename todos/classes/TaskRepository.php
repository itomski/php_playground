<?php

// Model

class TaskRepository {

    private const FILE = 'tasks.db'; // Hier werden die Daten abgelegt


    public function readAll(): array
    {
        if(!file_exists(self::FILE)) // Wenn die Datei nicht vorhanden ist...
            return []; // ... gleich ein leeres Array zurückgeben

        // Liest Text aus der Datei aus und wandelt es in ein Array um
        $arr =  unserialize(file_get_contents(self::FILE));
        if(!is_array($arr)) // Falls die Datei kein Array zurückgibt...
            $arr = []; // ... liefere ein leeres Array

        return $arr;
    }

    public function writeAll(array $tasks): void
    {
        // Wandelt ein Array in Text um und speichert ihn in eine Datei
        file_put_contents(self::FILE, serialize($tasks));        
    }
}
