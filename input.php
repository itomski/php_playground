<?php

$input = '  Das ist das <strong>Haus</strong> von <a href="https://www.google.com" style="color: #0ff">Nikigraus</a>  ';

$input = trim($input); // Scheidet Leerzeichen und Tabs an beiden Seiten der Zeichenkette ab
//$input = htmlspecialchars($input); // Wandelt < > in HTML-Entities um
$input = htmlentities($input, ENT_QUOTES); // Wandelt < > in HTML-Entities um
//$input = strip_tags($input, ENT_QUOTES); // Scheidet das das HTML raus
//$input = strip_tags($input, "<a>"); // Man kann eine Liste erlaubter Tags vorgeben


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    #<?= $input ?>#
</body>
</html>