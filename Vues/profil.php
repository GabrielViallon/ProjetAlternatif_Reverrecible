<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Profil - Reverrecible</title>
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
    <div class="separateurTop"></div>
    </header>
    <h1>VOTRE PROFIL</h1>
    <div class="separateur"></div>
        <?php if (isset($_SESSION['nom']) && isset($_SESSION['gerant']) && $_SESSION['gerant'] == 0) {?>
          <div class="profile">
            <div class="profile-infos">
              <img class="photo-profil" src="../Vues/Style/profilLogo.png">
              <?php if (isset($_SESSION['prenom'])) {
              $prenom = $_SESSION['prenom']; ?>
              <div class="profile-nom">
                <h1 style="color:white; margin:0px;"><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></h1>
                <p><?=$_SESSION['mail']?></p>
              </div>
              <?php }?>
            </div>

            <ul>
              <li><a href="deconnexionCTRL.php"><h3>DECONNEXION</h3></a></li>
            </ul>

          </div>

      <?php } else if (isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) { ?>
        <h3>Vous êtes un(e) gérant(e) du site web</h3>
        <div class="profile">

          <div class="profile-infos">
            <img class="photo-profil" src="../Vues/Style/profilLogo.png">
            <?php if (isset($_SESSION['prenom'])) {
            $prenom = $_SESSION['prenom']; ?>
            <div class="profile-nom">
              <h1 style="color:white; margin:0px;"><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></h1>
              <p><?=$_SESSION['mail']?></p>
            </div>
            <?php }?>
          </div>

          <ul>
            <li><a href="evenementsCTRL.php"><h3>EVENEMENTS</h3></a></li>
            <li><a href="inventaireDesProduitsConsignesCTRL.php"><h3>DEMANDES DE POINTS</h3></a></li>
            <li><a href="utilisateursCTRL.php"><h3>UTILISATEURS</h3></a></li>
            <li><a href="deconnexionCTRL.php"><h3>DECONNEXION</h3></a></li>
          </ul>

        </div>
        <?php } else { ?>
          <article class="sousArticle">
            <p> <a style="color:#0099cc;" href="../Controleur/connexionCTRL.php">Connectez-vous</a> ou <a style="color:#0099cc;" href="../Controleur/formulaireInscriptionCTRL.php">inscrivez vous</a> pour acceder au profil.</p>
          </article>
        <?php } ?>

    <?php require_once('footer.php'); ?>
  </body>
</html>
