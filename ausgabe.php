<?php

/*
Mehrzeiliger Kommentar
*/

// PHP Kommentar
echo '<h1>'.(10+7).'</h1>';

$value = 'Mein Text';

?>
<!-- HTML Kommentar -->

<div>
    <form action="">
        <input type="text" value="<?php echo $value ?>"><br>
        <input type="text" value="<?= $value ?>"><br>
        <?php
        echo '<input type="text" value="'.$value.'"><br>';
        ?>
    </form>
</div>
