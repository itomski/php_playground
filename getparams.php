<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>

    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a href="getparams.php?p=home" class="nav-link">Home</a>
            </li>
            <li class="nav-item"><a href="getparams.php?p=services" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="getparams.php?p=about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="getparams.php?p=contact" class="nav-link">Contact</a></li>
        </ul>
    </nav>

    <?php

    $auswahl = filter_input(INPUT_GET, 'p');
    // $auswahl = $_GET['p'];

    switch($auswahl) {

        case 'home':
            echo '<h1>Startseite</h1>';
            break;

        case 'services':
            echo '<h1>Unsere Services für Sie</h1>';
            break;

        case 'about':
            echo '<h1>Über uns</h1>';
            break;

        case 'contact':
            echo '<h1>Schreiben Sie uns</h1>';
            break;

        default:
            echo '<h1>Error!</h1>';
            break;

    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>