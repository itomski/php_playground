<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">

        <input type="hidden" name="type" value="event">

        <div>
            <label for="start">Start</label>
            <input type="date" id="start_date" name="start_date">
            <input type="time" id="start_time" name="start_time">
        </div>
        <div>
            <label for="end">Ende</label>
            <input type="date" id="end_date" name="end_date">
            <input type="time" id="end_time" name="end_time">
        </div>
        <div>
            <label for="title">Titel</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Beschreibung</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
        <button type="submit">Speichern</button>
    </form>
    
</body>
</html>