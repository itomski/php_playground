<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?= $gefunden ?></div>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="x">X</label>
            <input type="text" name="x" id="x">
        </div>
        <div>
            <label for="y">Y</label>
            <input type="text" name="y" id="y">
        </div>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>