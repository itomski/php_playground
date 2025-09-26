<?php

const FILE_NAME = 'data_.txt';

// Schreiben
// $content = 'Das ist das Haus von Nikigraus!';
// echo file_put_contents(FILE_NAME, $content, FILE_APPEND);

// Lesen
if(file_exists(FILE_NAME)) {
    $content = file_get_contents(FILE_NAME);
    $rows = explode('!', $content);
    foreach($rows as $row) {
        echo $row.'<br>';
    }
}
else {
    echo '<p>Datei wurde nicht gefunden!</p>';
}
