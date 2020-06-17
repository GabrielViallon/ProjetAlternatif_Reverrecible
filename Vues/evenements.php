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
            <a href="evenementsCTRL.php">EVENEMENTS</a>
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
    <article class="sousArticle">
      <p>En tant que gérant, vous pouvez créer des événements à venir pour en prévenir les utilisateurs</p>
    </article>

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
            <input type="submit" class="bouton" value="CREER">
          </form>
        </fieldset>
    </div>
    </article>
    <div class="separateur"></div>
    <?php } ?>

      <?php
      if(!empty($evenements)){

      foreach ($evenements as $evenement) { ?>
        <?php
          $date = $evenement->getDate();
          $nom = $evenement->getNom();
          $infoString = '';
          if($date > date("Y-m-d")){
            $infoString = '<b><i style="color:green;">À venir</i></b>';
          } else if($date < date("Y-m-d")){
            $infoString = '<b><i style="color:red;">Déjà passé</i></b>';
          } else {
            $infoString = "<b><i style=" . '"color:#0093a9;"' . ">Aujourd'hui</i></b>";
          }
        ?>
        <article>
          <div class="sousArticle fondGris">
            <p><?=$infoString?><h1 style="margin-bottom:0px;"><?=$date?> - <?=$nom?></h1></p>
            <p style="margin-left: 50px; font-size:85%;">par <b><i><?=$evenement->getGerant()?></i></b></p>
            <article>
              <p>
                <?=$evenement->getDescription()?>
              </p>
            </article>
          </div>

                <?php if (isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) { ?>
                    <a class="bouton" style="background-color: red; float: right;" href="supprimerEvenementCTRL.php?date=<?=$date?>&nom=<?=$nom?>">
                      <img style="max-width:32px; max-height:32px;" src="../Vues/Style/icons8-supprimer-32.png" alt="supprimer"></a>
                <?php } ?>

                </article>
                <div class="separateur"></div>
              <?php } }
              else {
                echo'<article class="sousArticle"><p style="color : red">' . " Aucun événement de prévu pour l'instant !</p></article>";
              }?>
              <?php require_once('footer.php'); ?>
            </body>
</html>
