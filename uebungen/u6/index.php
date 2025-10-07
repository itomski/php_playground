<?php

require_once 'config.inc.php';

if(!isset($_SESSION['parkplatz'])) {
    $_SESSION['parkplatz'] = new Parkplatz;
}

$action = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

switch($action) {
    case 'add':
        $kennzeichen = filter_input(INPUT_POST, 'kennzeichen', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $typ = filter_input(INPUT_POST, 'typ', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $f = match(strtolower($typ)) {
            'pkw' => new Pkw($kennzeichen),
            'motorrad' => new Motorrad($kennzeichen),
            'transporter' => new Transporter($kennzeichen)
        };
        $_SESSION['parkplatz']->add($f);
        break;

    case 'remove':
        $kennzeichen = filter_input(INPUT_POST, 'kennzeichen', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $fahrzeug = $_SESSION['parkplatz']->remove($kennzeichen);
        if($fahrzeug != null) {
            $fahrzeug->setParkenEnde(time());
            $msg = '<p>Fahrzeug ('.$fahrzeug->getKennzeichen().') wurde ausgeparkt<br>
                    Parkdauer: '.$fahrzeug->getParkdauer().' Sekunden</p>';
        }
        break;
}

include_once 'template.php';