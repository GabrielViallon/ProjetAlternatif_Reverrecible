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
        <li id="pageSelectionee"><a href="#"><h3>CONTACT</h3></a></li>
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
    <h1>PARTANT POUR L'AVENTURE ? CONTACTEZ-NOUS !</h1>
    <div class="separateur"></div>

    <article>
      <div class="sousArticle">
        <h2>CONTACT PAR E-MAIL</h2>
          <fieldset>

          <form action="../Controleur/contactCTRL.php" method="post">
            <input type="email" name="email" size="40" required placeholder="E-mail" >
            <br>
            <input type="text" name="nom"  size="40" required  placeholder="Nom" >
            <br>
            <input type="text" name="sujet" size="40"  required placeholder="Sujet" >
            <br>
            <textarea name="message" required placeholder="Entrez votre message" ></textarea>
            <br>
            <input type="submit" class="bouton" value="ENVOYER">
          </form>
        </fieldset>
    </div>
    </article>
      <div class="separateur"></div>

    <article>
      <div class="sousArticle">
    <h2>RESEAUX SOCIAUX</h2>
      <script async defer crossorigin="anonymous"
              src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0"></script>
      <div class="fb-page"
      data-href="https://www.facebook.com/reverrecible/"
      data-tabs="timeline" data-width="2000"
      data-height="0"
      data-small-header="false"
      data-adapt-container-width="true"
      data-hide-cover="true"
      data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/reverrecible/"
                    class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/reverrecible/">Reverrecible</a>
        </blockquote>
      </div>
    </div>
    </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
