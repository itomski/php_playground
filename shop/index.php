<?php
require_once 'ShoppingCart.php';
require_once 'ProductDTO.php';
session_start();

// instanceof prüft, ob eine Variable ein Objekt eines bestimmten Typs enthält
if(!isset($_SESSION['cart']) || !($_SESSION['cart'] instanceof ShoppingCart))
    // Ist in der Session kein cart hinterlegt, oder cart ist nicht vom Typ ShoppingCart, dann...
    $_SESSION['cart'] = new ShoppingCart();

if(isset($_POST['name'])) {
    // TODO: Daten validieren und säubern
    //$_SESSION['cart']->addProduct(new Product($_POST['name'], $_POST['quantity'], $_POST['price']));
    $dto = new ProductDTO($_POST);
    $_SESSION['cart']->addProduct($dto->toProduct());
    // Daten aus Formularen sollten IMMER vor der Verwendung validiert werden
    // Hier könnte man auch ein DTO verwenden. Data Transfer Object
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

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
        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="quantity">Anzahl</label>
                <input type="text" name="quantity" id="quantity">
            </div>
            <div>
                <label for="price">Preis</label>
                <input type="text" name="price" id="price">
            </div>
            <button>Hinzufügen</button>
        </form>

        <?php $_SESSION['cart']->list() ?>

        <p>Du musst <?= $_SESSION['cart']->sum() ?> EUR zahlen</p>
    </main>
</body>
</html>