<?php 
require_once '../includes/funktionsarchiv.php';
//include_once '../includes/funktionsarchiv_.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="dicecup.php">Reload</a></p>
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
    <img src="../img/<?= rollD6() ?>.png" height="100" alt="Würfel">
</body>
</html>