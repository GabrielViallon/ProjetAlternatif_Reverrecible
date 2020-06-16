<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Evenements - Reverrecible</title>
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
            <a href="profilCTRL.php">PROFIL</a>
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

  <?php if (isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) { ?>
    <p>En tant que gérant, vous pouvez créer des événements à venir pour en prévenir les utilisateurs</p>

    <article>
      <div class="sousArticle">
        <h2>Nouvel événement :</h2>
          <fieldset>
          <form action="evenementsCTRL.php" method="post" class="formulaire-inscription">
            <input type="text" name="nom" size="40" required placeholder="Titre de l'événement" >
            <br>
            <input type="date" name="dateEv" required  placeholder="date" >
            <br>
            <br>
            <textarea name="description" required placeholder="Description de l'événement" ></textarea>
            <input type="submit" class="bouton" value="Créer l'événement">
          </form>
        </fieldset>
    </div>
    </article>
    <div class="separateur"></div>
    <?php } ?>

      <?php
      if(!empty($evenements)){

      foreach ($evenements as $evenement) { ?>
                <article>

                <div class="sousArticle fondGris">
                  <!-- titre de l'informations avec date -->
                  <?php
                  $date = $evenement->getDate();
                   ?>

                  <!-- <img style="max-width: 35px; margin-right: 10px;" src="../Vues/Style/icons8-bell-24.png" alt="un evenement"> -->
                  <h2 style="margin:10px;"><?=$evenement->getNom()?></h2>
                  <h3 style="margin:10px;"><?=$date?></h3>
                  <!-- contenu -->
                  <p>
                  <?=$evenement->getDescription()?>
                  </p>
                  <!-- nom de celui qui donne l'info -->
                  <p>Informations données par <b><i><?=$evenement->getGerant()?></i></b></p>
                </div>

                <?php if (isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) { ?>
                    <a class="bouton" style="background-color: red; float: right; width: 100px;" href="supprimerEvenementCTRL.php?date=<?=$date?>&nom=<?=$evenement->getNom()?>"><h3 style="color:white;">supprimer</h3></a>
                <?php } ?>

                </article>
                <div class="separateur"></div>
              <?php } }
              else {
                echo"<article> aucun evenement de prévu pour l'instant </article>";
              }?>
          <?php require 'footer.php' ?>
  </body>
</html>
