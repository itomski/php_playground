<h1>About</h1>

<?php foreach($cards as $card) { ?> 
<div>
    <h2><?= $card['name'] ?></h2>
    <h5><?= $card['position'] ?></h5>
</div>
<?php } ?>