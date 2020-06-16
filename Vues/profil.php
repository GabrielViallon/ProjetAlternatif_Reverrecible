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
        <li><a href="#"><h3>CONTACT</h3></a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn"><h3>AUTRES</h3></a>
          <div class="dropdown-content">
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
    <!-- <div>
      <img src="Style/HEADER_LANDSCAPE_Contact.jpg" alt="" align="center">
    </div> -->
    <div class="container-profil">
      <div class="informations-bar">

        <div class="profile">
          <img class="photo-profil" src="../Vues/Style/LOGOS_METROPOLE.png">
          <?php if (isset($_SESSION['prenom'])) {
          $prenom = $_SESSION['prenom'];
          echo '<h2 class="name">' . $_SESSION['prenom'] . " " . $_SESSION['nom'] . '</h1>';}?>

          <ul class="informations-list">
            <li class="information-profil active">ACTUALITES</li>
            <li class="information-profil">A PROPOS</li>
            <li class="information-profil">INFORMATIONS DU COMPTE</li>
          </ul>



          <!-- <?php echo $prenom;?> -->

        </div>
      </div>
      <a class="bouton-modifier-profil" href="../Controleur/editerMonProfilCTRL.php"><h3>MODIFIER MON PROFIL</h3></a>
    </div>
    <div class="contenu-profil">
      <article>
        <p></p>
      </article>
    </div>
    <?php require 'footer.php' ?>
  </body>
</html>
