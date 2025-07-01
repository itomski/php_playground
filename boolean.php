<?php

$kaffeeVorhanden = true;
$kaffeeVorhanden = TRUE;

echo "'{$kaffeeVorhanden}'<br>";

$kaffeeVorhanden = false;
echo "'{$kaffeeVorhanden}'<br>";

if($kaffeeVorhanden)
    echo "<h2>Kaffee ist da!</h2>";

// null = false

$name = "";
if($name) // string wird wie boolean gehandhabt. Leer = false, Rest = true
    echo "<h2>Name ist bekannt!</h2>";

$zahl = 0;    
if($zahl) // int wird wie boolean gehandhabt. 0 = false, Rest = true
    echo "<h2>Zahl ist bekannt!</h2>";

$zahl = 100; // Ersetzt den alten Wert