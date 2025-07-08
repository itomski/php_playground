<!-- View -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muster GmbH - <?= $page['title'] ?></title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?p=services">Services</a></li>
            <li><a href="index.php?p=products">Products</a></li>
            <li><a href="index.php?p=about">About</a></li>
            <li><a href="index.php?p=contact">Contact</a></li>
        </ul>
    </nav>

    <header><?= $page['header'] ?></header>
    <main><?= $page['main'] ?></main>
    <footer><?= $page['footer'] ?></footer>
</body>
</html>