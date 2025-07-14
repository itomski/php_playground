<pre>
<?php

$str = '#buchhaltung, #rechung, #wichtig';

$tags = explode(',', $str);

print_r($tags);

for ($i=0; $i < count($tags); $i++) { 
    $tags[$i] = str_replace('#', '', $tags[$i]); // Ersetzt # durch eine leere Zeichenkette
    $tags[$i] = trim($tags[$i]); // Entfernt Leerzeichen an beiden Enden
    //$tags[$i] = trim(str_replace('#', '', $tags[$i])); // alles in einer Zeile
}

// foreach($tags as $tag) { 
//     // $tag ist eine Kopie des aktuellen Wertes
//     $tag = trim(str_replace('#', '', $tag)); // Hier wird die Kopie geändert. Original ändert sich nicht
// }

print_r($tags);


function cleanTags(string $tags) : array {
    $tags = explode(',', $tags);
    for ($i=0; $i < count($tags); $i++) { 
        $tags[$i] = trim(str_replace('#', '', $tags[$i]));
    }
    return $tags;
}

print_r(cleanTags('#a, #b, #cde'));

$text = 'Das ist das Haus von Nikigraus';

$pos = strpos($text, 'Haus'); // Liefert die Position des gesuchten Elements im Text
echo $pos;
echo PHP_EOL;

echo substr($text, $pos); // Gibt einen Teilstring ab gewünschter Position zurück
echo PHP_EOL;
echo substr($text, $pos, 6); // Gibt 5 Zeichen ab gewünschter Position zurück

?>
</pre>