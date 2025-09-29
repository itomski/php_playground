<?php

$action = $_GET['a'] ?? 'start';

switch($action) {

    case 'start':
        echo '<p>Startseite</p>';
        break;

    case 'list':
        echo '<p>Liste anzeigen</p>';
        break;

    case 'form':
        include 'tpl/form.tpl.php';
        break;

     case 'api':
        header('Content-type: application/json');
        $json = '[{"a": 100, "b": 200}, {"a": 100, "b": 200}]';
        echo $json;
        break;

    case 'save':
        // Formulardaten einlesen
        if(!empty($_POST['wert1']) && !empty($_POST['wert2']) && !empty($_POST['wert3'])) {
            // Daten Speichern
            // Umleitung auf list
            header('Location: controller.php?a=list');
        }
        else {
            // Umleitung auf list
            header('Location: controller.php?a=form&error=1');
        }        
        exit; // Beendet vorzeitig das Script

    default:
        http_response_code(404);
        header('HTTP/1.1 404 Not Forud');

}