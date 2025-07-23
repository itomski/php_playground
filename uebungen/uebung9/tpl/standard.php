<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="index.php?p=0">Americano</a></li>
            <li><a href="index.php?p=1">Cappuccino</a></li>
            <li><a href="index.php?p=2">Espresso</a></li>
            <li><a href="index.php?p=3">Flat White</a></li>
            <li><a href="index.php?p=4">Latte Macchato</a></li>
        </ul>
    </nav>

    <h2><?= $output ?? 'Kein Produkt ausgewählt.' ?></h2>

</body>
</html>