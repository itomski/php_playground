<?php

require_once 'PDO.php';
require_once 'PDO2.php';

use MeinTest\PDO;
use MeinTest\Ext\PDO as PDOExt; // Alias

$pdo1 = new PDO();
$pdo2 = new PDOExt(); // Verwendung des Alias