<?php 
session_start();

if(isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['name'])) { ?>
        <p>Herzlich Willkommen <?= $_SESSION['name'] ?></p>
    <?php } else { ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="name" id="name">
            <button type="submit">Speichern</button>
        </form>
    <?php } ?>

    <pre>
        <?php print_r($_SESSION) ?>
    </pre>
</body>
</html>