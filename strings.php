<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name = 'Peter';
echo $name;

// <?= führt zu sofortigen echo
?>

<!-- Verwendung von PHP-Variablen in HTML -->
<h1>Das ist das Haus von <?= $name ?></h1>
<input type="text" name="" id="" value="<?= $name ?>">

<?php
// Ausgabe von HTML in PHP
echo '<input type="text" name="" id="" value="${name}" />';
echo "<input type=\"text\" name=\"\" id=\"\" value=\"${name}\" />";
echo '<input type="text" name="" id="" value="'.$name.'" />';

$preis = 15.99;
echo "<input type=\"text\" name=\"\" id=\"\" value=\"{$preis} €\" />";

echo "<div style=\"color: #0f0\">$name</div>";
echo "<div style=\"color: #f00\">{$name}</div>";
echo "<div style=\"color: #00f\">${name}</div>"; // Deprecated

?>
</body>
</html>