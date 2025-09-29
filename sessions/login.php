<?php
session_start();

if(count($_POST) > 0) {
    if($_POST['user'] === 'admin' && $_POST['password'] === 'geheim#123') {
        $_SESSION['login'] = true;
    } 
    else {
        $error = true;
    }
}

if(count($_GET) > 0) {
    if($_GET['logout'] == 1) {
        unset($_SESSION['login']);
        // session_destroy(); // Zerstört Serverseitig die Session
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
    <?php if(isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
        <div class="text-bg-danger p-3">Geheim...</div>
        <a href="<?= $_SERVER['PHP_SELF'] ?>?logout=1" class="btn btn-info">Logout</a>
    <?php } else { ?>
    <div class="text-bg-light p-3">
        <?php if(isset($error)) { echo '<p>Error</p>'; } ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
                <input type="text" name="user" id="user" placeholder="Benutzername">
            </div>
            <div class="mb-3">
                <input type="password" name="password" id="password" placeholder="Passwort">
            </div>
            <button class="btn btn-success">Login</button>
        </form>
    </div>
    <?php } ?>
</body>
</html>

