<?php
session_start();
require "co_eval.php";

$request = $db->prepare('SELECT * FROM produits');  
$request->execute([]);
$produits = $request->fetchAll();
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
  </head>
  <body>
      <form id="form_adm" action='adm_eval.php' method='POST'>
          <label> Administrator Name <input type='text' name='name_adm'></label>
          <label> Password <input type='text' name='pass'></label>
      <button id='valid' > Validate </button>
       </form>
<?php if(isset($_SESSION["is_connected"])) {
  include "eval_header_co.php";
  } else { 
    include "eval_header_noco.php"; 
    };?>
      <main>
<?php foreach ($produits as $produit): ?>
  <article>
    <p id="titre"> <?= $produit['product'] . " " . $produit['brand']; ?>  </p>
    <img src="<?= $produit['img']; ?>" alt="img">
    <p><?= $produit['price']; ?></p>
    <button type="button" class="btn btn-success"> Acheter </button>
  </article>
<?php endforeach; ?>
      </main>
</body>
<script src="eval.js"></script>
</html>