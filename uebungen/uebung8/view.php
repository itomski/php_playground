<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/@picocss/pico/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <button name="btn" value="reset">Neues Spiel starten</button>
        </form>

        <h2>Pilz setzen</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div>
                <label for="setzen_x">X</label>
                <input type="text" name="x" id="setzen_x">
            </div>
            <div>
                <label for="setzen_y">Y</label>
                <input type="text" name="y" id="setzen_y">
            </div>
            <button name="btn" value="setzen">Setzen</button>
        </form>
        <hr>
        <h2>Pilz suchen</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div>
                <label for="suchen_x">X</label>
                <input type="text" name="x" id="suchen_x">
            </div>
            <div>
                <label for="suchen_y">Y</label>
                <input type="text" name="y" id="suchen_y">
            </div>
            <button name="btn" value="suchen">Suchen</button>
        </form>
        <hr>
    </main>
</body>
</html>