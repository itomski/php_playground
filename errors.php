<?php

//ini_set("error_reporting", E_ALL); // Verändert die Einstellungen der php.ini
// auch so möglich
//error_reporting(E_ALL & ~E_NOTICE); // Alles außer der NOTICE
error_reporting(E_ALL); // Alles
//error_reporting(E_WARNING); // Nur Warnungen
//error_reporting(0); // Nichts anzeigen

//phpinfo();

echo '<pre>';

print_r(get_defined_constants());

//echo LOG_UUCP;

const MY_CONST = 100;
//MY_CONST = 200; // Kann nicht verändert werden

define('ABC', 200);

function machWas() {
    echo ABC.PHP_EOL;
    echo MY_CONST.PHP_EOL;
    //const MY_CONST2 = 300; // Kann hier nicht benutzt werden!
    define('XYZ', 400); // Geltungsbereich ist auf die Funktion eingeschränkt
}

//echo XYZ.PHP_EOL;

machWas();

echo '</pre>';