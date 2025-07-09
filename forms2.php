<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            
            <div class="col">
                <h2>Formular</h2>
                
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

                    <div class="mb-3">
                        <input type="text" name="title" id="title" placeholder="Titel" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" id="password" placeholder="Passwort" class="form-control">
                    </div>

                    <div class="mb-3">
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Nachricht"></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="category" id="cat_politics" value="politics">
                            <label class="form-check-label" for="cat_politics">Politik</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="category" id="cat_economicy" value="economics">
                            <label class="form-check-label" for="cat_economics">Wirtschaft</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="category" id="cat_science" value="science">
                            <label class="form-check-label" for="cat_science">Wissenschaft</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <select name="country" class="form-select">
                            <option value="DE" selected>Deutschland</option>
                            <option value="JP">Japan</option>
                            <option value="GB">UK</option>
                            <option value="US">USA</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tags[]" value="timely" id="tags_timely">
                            <label class="form-check-label" for="tags_timely">Aktuell</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tags[]" value="important" id="tags_important">
                            <label class="form-check-label" for="tags_important">Wichtig</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tags[]" value="interesting" id="tags_interesting">
                            <label class="form-check-label" for="tags_interesting">Interessant</label>
                        </div>
                    </div>

                    <button class="btn btn-secondary">Senden</button>
                </form>
            </div>

            <div class="col">
                <!-- FORMULARDATEN NACH DEM ABSENDEN -->
                <pre><?php print_r($_POST) ?></pre>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>