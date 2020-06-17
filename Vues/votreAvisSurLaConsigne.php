<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Reverrecible - Contact</title>
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
    <h1>Donnez votre avis !</h1>
    <div class="separateur"></div>

    <article class="sousArticle">
        <iframe src="https://framaforms.org/la-consigne-pour-reemploi-du-verre-votre-avis-nous-interesse-1588342800" width="100%" height="2000"></iframe>
    </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
