<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="controller.php?a=home">Home</a></li>
            <li><a href="controller.php?a=services">Services</a></li>
            <li><a href="controller.php?a=products">Products</a></li>
            <li><a href="controller.php?a=contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <?php
            $auswahl = $_GET['a'];

            if($auswahl === 'home') {
                echo '<h1>Home</h1>';
            }
            elseif($auswahl === 'services') {
                echo '<h1>Services</h1>';
            }
            elseif($auswahl === 'products') {
                echo '<h1>Products</h1>';
            }
            elseif($auswahl === 'contact') {
                echo '<h1>Contact</h1>';
            }
            else {
                echo '<h1>Falsche Auswahl</h1>';
            }
        ?>
    </main>
</body>
</html>

