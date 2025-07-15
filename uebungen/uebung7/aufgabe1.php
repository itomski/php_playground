<?php

if(isset($_POST['text'])) {

    // HTML entfernen
    $clean = strip_tags($_POST['text']);
    
    // Nach Semikolon zerlegen
    $parts = explode(';', $clean);

    for ($i=0; $i < count($parts); $i++) { 
        $part = $parts[$i];
        $part = trim($part); // Leerzeichen an beiden Enden entfernen
        if($i == 0) {
            // Ersten Teil in Großbuchstaben
            $part = strtoupper($part);
        }
        elseif($i == count($parts) - 1) {
            // Den letzten Teil in Kleinbuchstaben
            $part = strtolower($part);
        }
        $parts[$i] = $part;
    }

    echo '<pre>';
    print_r($parts);
    echo '</pre>';
}

?>
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
            <div>
                <label for="text">Eingabe</label>
                <input type="text" name="text" id="text">
            </div>
            <button>Verarbeiten</button>
        </form>
    </main>
</body>
</html>
