<?php
// View
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
                <label for="task">Aufgabe</label>
                <input type="text" name="task" id="task">
            </div>
            <button>Speichern</button>
        </form>
        <hr>

        <table>
            <thead>
                <tr>
                    <th>Aufbage</th>
                    <th>Von</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tasks as $task) { ?>
                <tr>
                    <td><?= $task->getName() ?></td>
                    <td><?= $task->getErzeugtAmFormatted() ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </main>
</body>
</html>
