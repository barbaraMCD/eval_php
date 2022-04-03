<?php
require "auth_eval.php";
requireAuth();
require "co_eval.php";
if (isset($_POST["new_product"]) and isset($_POST["new_brand"]) and isset($_POST["new_price"])) {
    $newProduct = $_POST["new_product"];
    $newBrand = $_POST["new_brand"];
    $newPrice = $_POST["new_price"];
    $newImg = $_POST["new_img"];
    $request = $db->prepare("INSERT INTO produits (product, brand, price, img)
    VALUES (:product, :brand, :price, :img)");    
    $request->execute([
    "product" => $newProduct,
    "brand" => $newBrand,
    "price" => $newPrice . " " . "euros",
    "img" => $newImg,
    ]);
}
if (isset($_POST["modify_price"], $_POST["modify_brand"], $_POST["modify_product"], $_POST["modify_img"])) {
    $modifyProduct = $_POST["modify_product"];
    $modifyBrand = $_POST["modify_brand"];
    $modifyPrice = $_POST["modify_price"];
    $modifyImg = $_POST["modify_img"];
    $id = $_POST["id"];

    $request = $db->prepare("UPDATE produits SET product = :product, brand = :brand, price = :price, img = :img WHERE id = :id");
    $request->execute([
        "product" => $modifyProduct,
        "brand" => $modifyBrand,
         "price" => $modifyPrice. " " . "euros",
         "img" => $modifyImg,
         "id" => $id,
    ]);	
}
if (isset($_POST["ids"])) {
    $ids = $_POST["ids"];

    $request = $db->prepare("DELETE FROM produits WHERE id = :id");
    $request->execute([
        "id" => $ids,
    ]);	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="eval.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Golf</title>
    <title>Golf&Co</title>
</head>
<body>
<?php include "eval_header_co.php"; ?>
    <main>
        <form class="product" action="adm_eval.php" method="POST">
            <label> Nouveau Produit </label>
            Nom <input type="text" name="new_product">
            Marque <input type="text" name="new_brand">
            Prix <input type="text" name="new_price">
            Img (lien http) <input type="text" name="new_img">
            <button class="adding"> Add </button>
        </form>
        <form class="product" action="adm_eval.php" method="POST">
            <label> Modifier un produit </label>
            ID (ne pas modifier) <input type="text" name="id">
            Nom <input type="text" name="modify_product">
            Marque <input type="text" name="modify_brand">
            Prix <input type="text" name="modify_price">
            Img (lien http) <input type="text" name="modify_img">
            <button class="adding"> Modify </button>
        </form>
        <form class="product" action="adm_eval.php" method="POST">
            <label> Supprimer un produit </label>
            ID <input type="text" name="ids">
            <button class="adding"> Delete </button>
        </form>
    </main>
</body>
<script src='eval.js'></script>
</html>