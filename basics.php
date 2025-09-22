<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'PHP Start' ?></title>
</head>
<body>
    <h1>
    <?php 
    $zeit = time();
    echo date("d.m.Y H:i", $zeit);
    echo '<br />';
    echo 1+7;
    print '<br />';
    echo 'Das ist mein $name<br />';
    $name = 'Peter';
    echo "Das ist mein $name<br />";
    ?>
    </h1>

    <p><?php
    echo '1';
    echo '2';
    echo '3';
    ?></p>

    <p>123</p>

</body>
</html>