<?php
function requireAuth() {
session_start();
  $name = [
  "Barbara" => [
   "password" => "1234",
  ],
  "Abdel" => [
   "password" => "5678",
  ],
  "Alice" => [
    "password" => "9123",
  ]
    ]; 

if(!isset($_SESSION["is_connected"]) or $_SESSION["is_connected"] == false) {
  $adm = isset($_POST["name_adm"]) ? $_POST["name_adm"] : null;
  $password = isset($_POST["pass"]) ? $_POST["pass"] : null;
   
  if(isset($name[$adm]) && $name[$adm]["password"] == $password) {
    $_SESSION["is_connected"] = true;
    $_SESSION["adm"] = $adm;
    } else {
      header("location: eval.php");
      session_destroy();
    die();
    }
  };
}
?>