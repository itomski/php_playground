<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">    
    <title>Document</title>
</head>
<body>
    <nav class="container">
        <div class="row">
            <div class="col">
                <ul class="nav">
                    <li class="nav-item"><a href="controller.php?a=home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="controller.php?a=services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="controller.php?a=products" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="controller.php?a=contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <div class="col">
                <?php
                    // MVC - Model View Controller

                    $auswahl = $_GET['a'] ?? '';

                    switch($auswahl) {
                        case 'start':
                        case 'home':
                            echo '<h1>Home</h1>';
                            break;

                        case 'services':
                            echo '<h1>Services</h1>';
                            break;

                        case 'products':
                            echo '<h1>Products</h1>';
                            break;

                        case 'contact':
                            echo '<h1>Contact</h1>';
                            break;

                        default:
                            echo '<h1>Falsche Auswahl</h1>';
                    }

                    /*
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
                    */
                ?>
            </div>
        </div>
    </main>
    <script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

