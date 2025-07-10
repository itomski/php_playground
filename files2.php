<?php

const FILE = 'tasks.txt';

if(file_exists(FILE)) { // Wenn Datei bereits vorhanden
    // dann Altdaten einlesen
    $tasks = unserialize(file_get_contents(FILE));
}
else {
    // sonst ein leeres Array erzeugen
    $tasks = [];
}

// Schauen, ob "Lösche"-Linkt betätigt wurde
if(isset($_GET['a']) && $_GET['a'] == 'delete') {
    // Nr auslesen und im Array Element an position entfernen
    $nr = $_GET['nr'];
    array_splice($tasks, $nr, 1); // Element aus dem Array entfernen
    file_put_contents(FILE, serialize($tasks)); // Alutuellen Stand das Arrays in die Datei spiechern
}

// Wenn Formular abgeschickt
if(count($_POST)) {
    // dann Info aus dem Formular zum Array hinzufügen
    $tasks[] = ['name' => htmlspecialchars($_POST['task'])];
    // Alutuellen Stand das Arrays in die Datei spiechern
    file_put_contents(FILE, serialize($tasks));
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <main class="container">
        <div class="grid">
            <div>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div>
                        <label for="task">Aufgabe</label>
                        <input type="text" name="task" id="task">
                    </div>
                    <button type="submit">Speichern</button>
                </form>
            </div>
            <div></div>
        </div>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Aufabe</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tasks as $k => $v) { ?>
                <tr>
                    <td><?= $v['name'] ?></td>
                    <td><a href="<?= $_SERVER['PHP_SELF'] ?>?a=delete&nr=<?= $k ?>">Löschen</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>

