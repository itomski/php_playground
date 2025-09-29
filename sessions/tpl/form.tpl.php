<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller.php?a=save" method="post">
        <?php if(isset($_GET['error'])) { ?>
            <div>Error!</div>
        <?php } ?>
        <div>
            <label for="wert1">Wert 1</label>
            <input type="text" name="wert1" id="wert1">
        </div>
        <div>
            <label for="wert2">Wert 2</label>
            <input type="text" name="wert2" id="wert2">
        </div>
        <div>
            <label for="wert3">Wert 3</label>
            <input type="text" name="wert3" id="wert3">
        </div>
        <button type="submit">Speichern</button>
    </form>
</body>
</html>