<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    
    <?php include_once './tpl/nav.tpl.php' ?>

    <main class="container">
        <?php include_once './tpl/'.$subtpl.'.tpl.php' ?>  
    </main>
</body>
</html>