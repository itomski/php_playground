<?php
session_start(); // Session wird gestartet, wenn sie noch nicht vorhanden ist
session_regenerate_id(); // Sicherheitseinstellung. Ändert die ID bei jedem Request

if(!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

echo 'Moin Moin! '. ++$_SESSION['count'];