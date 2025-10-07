<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2.1.1/css/pico.min.css">
</head>
<body>
    
    <div class="container">
        <form action="index.php?a=add" method="post">
            <input type="text" name="kennzeichen" id="kennzeichen" placeholder="Kennzeichen">
            <label>Pkw <input type="radio" name="typ" id="typ_pkw" value="pkw"></label>
            <label>Motorrad <input type="radio" name="typ" id="typ_motorrad" value="motorrad"></label>
            <label>Transporter <input type="radio" name="typ" id="typ_transporter" value="transporter"></label>
            <button>Einparken</button>
        </form>

        <hr>

        <form action="index.php?a=remove" method="post">
            <input type="text" name="kennzeichen" id="kennzeichen" placeholder="Kennzeichen">
            <button>Ausparken</button>
        </form>
        <?php if(isset($msg)) { ?>
        <hr>
        <?= $msg ?>
        <?php } ?>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Kennzeichen</th>
                    <th>Eingeparkt</th>
                    <th>Typ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['parkplatz']->getFahrzeuge() as $fahzeug) { ?>
                <tr>
                    <td><?= $fahzeug->getKennzeichen() ?></td>
                    <td><?= date('d.m.y H:i:s', $fahzeug->getParkenStart()) ?></td>
                    <td><?= $fahzeug->getType() ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>      
    </div>


</body>
</html>