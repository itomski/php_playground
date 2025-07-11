<?php
require_once 'config.php';

$error = false;

// HTTP-Methoden
// GET: Abfrage von Daten
// HEAD: Verfügbarkeit abfragen
// POST: Neue Daten anlegen
// PUT: Verändern von Daten
// DELETE: Löschen von Daten

if(isset($_GET['a']) && $_GET['a'] == 'logout') {
    // unset entfernt Daten aus der Session
    unset($_SESSION['user']);
    unset($_SESSION['login']);
}


if(isset($_POST['email']) && isset($_POST['password'])) {
    if($_POST['email'] == 'p.parker@shield.org' && $_POST['password'] == 'geheim#123') {
        $_SESSION['user'] = $_POST['email'];
        $_SESSION['login'] = true;
    }
    else {
        $error = true;
    }
}

debugInfo();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css">
</head>
<body>
    <main class="container">
        <div class="grid">
            <?php if(isset($_SESSION['login']) && $_SESSION['login']) { ?>
            <div>
                <h2>Herzlich Willkommen!</h2>
                <a href="<?= $_SERVER['PHP_SELF'] ?>?a=logout">Logout</a>
            </div>
            <?php } else { ?>
            <div>
                <?php if($error) { ?>
                    <article class="pico-background-pink-500">
                        Falsche Zugangsdaten
                    </article>
                <?php } ?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div>
                        <label for="email">E-Mail</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div>
                        <label for="password">Passwort</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
            <?php } ?>
            <div></div>
        </div>
    </main>
</body>
</html>