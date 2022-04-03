<?php

$user = "root";
$pass = "Kiwi78700++";

try {
  $db = new PDO('mysql:host=localhost:3306;dbname=php_cours', $user, $pass);
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
  echo "Echec de la connexion à la base de données \n";
  die($e->getMessage());
}
