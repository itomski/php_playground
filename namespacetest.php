<?php

// Hat eine Datei keine Namespace-Vorgabe befindet sie sich automatisch im PHP-Basis-Namespace

// Liegt eine Namespace-Vorgabe vor, werden andere Klassen auch automatisch im
// vorgegebenen Namespace gesucht

// namespace MeinTest;

require_once 'PDO.php';

// use MeinTest\PDO; // importiert die Klasse aus einem gewünschten Namespace

$pdo = new PDO('...url zu der DB'); // Verwendet das PDO aus der PHP-Standard-Library
$pdo = new MeinTest\PDO(); // Verwendet mein eigenes PDO aus dem Namespace MeinTest

// beim verwenden von use ist die Angabe des Namespace für die verwendete Klasse nicht nötig