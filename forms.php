<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <pre>
<?php 
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
// print_r($_SERVER);

// htmlspecialchars macht verschicktes HTML unschädlich
echo htmlspecialchars($_POST['name'] ?? '').' '.htmlspecialchars($_POST['msg'] ?? '').PHP_EOL;
?>
        </pre>
    </div>

    <hr>

    <!-- Versenden per POST -->
    <!--PHP_SELF = Name dieser Datei -->
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="name">Name</label>
            <!-- name ist pflicht! -->
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="msg">Nachricht</label>
            <textarea id="msg" name="msg"></textarea>
        </div>
        <button type="submit">Senden</button>
    </form>

    <hr>

    <!-- Versenden per GET -->
    <ul>
        <li><a href="<?= $_SERVER['PHP_SELF'] ?>?knr=1">Peter Parker</a></li>
        <li><a href="forms.php?knr=2">Bruce Banner</a></li>
        <li><a href="forms.php?knr=3">Carol Danvers</a></li>
        <li><a href="forms.php?knr=4">Steve Rogers</a></li>
    </ul>

</body>
</html>