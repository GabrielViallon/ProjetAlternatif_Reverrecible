<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Connexion - Reverrecible</title>
  </head>
  <body>
    <header>
      <nav>
      <ul>
        <li id="logoMenu"><a href="mainCTRL.php"><img src="../Vues/Style/Logo.png" alt="logo"></a></li>
        <li><a href="quisommesnousCTRL.php"><h3>QUI SOMMES NOUS ?</h3></a></li>
        <li><a href="consigneCTRL.php"><h3>CONSIGNE</h3></a></li>
        <li><a href="contactCTRL.php"><h3>CONTACT</h3></a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn"><h3>AUTRES</h3></a>
          <div class="dropdown-content">
            <a href="donsCTRL.php">DONS</a>
            <a href="inventaireDesProduitsConsignesCTRL.php">INVENTAIRE DES PRODUITS CONSIGNÉS</a>
            <a href="evenementsCTRL.php">DÉFI RAMÈNE TA BOUTEILLE !</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- <div>
      <img src="Style/HEADER_LANDSCAPE_Contact.jpg" alt="" align="center">
    </div> -->
    <div class="separateurTop"></div>
    </header>
    <h1>EVENEMENTS</h1>
    <div class="separateur"></div>

      <?php foreach ($evenements as $evenement) { ?>
              <article>
                <div class="sousArticle">
                  <!-- titre de l'informations avec date -->
                  <?php
                  $date = $evenement->getDate();
                   ?>

                  <h4><?=$evenement->getNom()?> - <?=$date?></h4>
                  <hr>
                    <img src="../Vues/Style/icons8-bell-24.png" alt="un evenement">
                  <?php } ?>
                </div>
                <div class="sousArticle">
                  <!-- contenu -->
                  <?=$evenement->getDescription()?>
                  <!-- nom de celui qui donne l'info -->
                  <p>Informations données par <?=$evenement->getGerant()?></p>
                </div>
              </article>
            <br>
          <?php require 'footer.php' ?>
  </body>
</html>
