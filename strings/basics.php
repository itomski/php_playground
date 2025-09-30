<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="value" id="value">
        <button type="submit">Senden</button>
    </form>

    <pre>
<?php

function clean(array &$data) {
    foreach($data as $k => $v) {
        if(is_array($v)) {
            clean($v); // Rekursion
        }
        else {
            $data[$k] = htmlspecialchars(strip_tags(trim($v)), ENT_QUOTES);
        }
    }
}

clean($_POST);

$value = $_POST['value'] ?? 'Leer';
//$value = htmlspecialchars($value, ENT_QUOTES);
//$value = strip_tags($value);
var_dump(ucfirst(strtolower($value)));
?>
    </pre>
</body>
</html>



