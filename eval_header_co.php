<header>
  <div class="brand">
      <h1> Golf&Co </h1>
  </div>
  <div class="co_web">
      <div class="co_ordi"> 
        <?php if(isset($_SESSION["is_connected"]) == true) {
        echo "Bienvenue" . " " . $_SESSION["adm"];
        }; ?> 
      </div>
      <a href="eval.php"> <img src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/34/000000/external-home-stay-at-home-flatart-icons-solid-flatarticons.png"/> </a>
      <a href="adm_eval.php"> <img src="https://img.icons8.com/ios-glyphs/30/000000/merchant-account.png"/> </a> 
      <a href="deco_eval.php"> <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/30/000000/external-log-out-user-interface-kmg-design-detailed-outline-kmg-design.png"/></a>
  </div>
    </header>