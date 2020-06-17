<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Reverrecible - Home</title>
  </head>
  <body>
    <header>
      <nav>
      <ul>
        <li id="logoMenu"><a href="../Controleur/mainCTRL.php"><img src="../Vues/Style/Logo.png" alt="logo"></a></li>
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
    </header>
    <div class="page-wrapper">
    <div class="wow fadeIn">
      <img id="imgBackground" src="../Vues/Style/BackgroundModified.png" alt="image background">
    </div>
    <div class="separateur"></div>
    <article>
      <div class="sousArticle">
      <h2 class="wow zoomIn">LA CONSIGNE DU RÉEMPLOI DU VERRE.<br>
      VOTRE AVIS NOUS INTÉRESSE!</h2>
    </div>
    <div class="sousArticle">
      <a class="bouton" href="../Controleur/votreAvisSurLaConsigneCTRL.php"><h3>ACCEDEZ AU QUESTIONNAIRE</h3></a>
    </div>
    </article>
    <div class="separateur"></div>
    <article>
      <h2>POURQUOI REEMPLOYER NOS CONTENANTS EN VERRE ?</h2>
      <div class="sousArticle">
        <img class="wow bounce imgMain" src="../Vues/Style/ENVIRONNEMENT.png" alt="environnement">
        <h4>Pour réduire notre impact environnemental</h4>
      </div>
      <div class="sousArticle">
        <img class="wow bounce imgMain" src="../Vues/Style/ACTEURS_ECONOMIQUE.png" alt="acteurs economiques">
        <h4>Pour favoriser les acteurs économiques du territoire</h4>
      </div>
      <div class="sousArticle">
        <img class="wow bounce imgMain" src="../Vues/Style/ECONOMIES.png" alt="economies">
        <h4>Pour faire des économies</h4>
      </div>
      <div class="sousArticle">
        <a class="bouton" href="consigneCTRL.php"><h3>EN SAVOIR PLUS</h3></a>
      </div>
    </article>
    <article>
    <div class="sousArticle">
      <a class="bouton" href="quisommesnousCTRL.php"><h2>ET CONCRETEMENT, QUE PROPOSE-T-ON ?</h2></a>
    </div>
  </article>
    <div class="separateur"></div>
    <article>
      <div class="sousArticle fondGris">
        <h2>Votre expérience de la consigne</h2>
        <h4>Etude du terrain</h4>
        <p>Vous connaissez un ou des producteurs de la région Rhône Alpes qui pratiquent la consigne sur les emballages de leur produits (boissons, ou denrées alimentaires) ?</p>
        <p>Faites-les nous connaître via ce formulaire !</p>
        <a class="bouton" href="inventaireDesProduitsConsignesCTRL.php"><h3>FORMULAIRE</h3></a>
      </div>
      <div class="sousArticle fondGris">
        <h2>Adressé aux citoyens</h2>
        <h4>Vous voulez nous rejoindre ?</h4>
        <p>Vous avez envie de participer à la construction du projet ?<br>
          De mettre du temps et/ou des compétences à contribution ?</p>
        <p><br>Contactez-nous sans tarder !</p>
        <a class="bouton" href="contactCTRL.php"><h3>CONTACTEZ-NOUS</h3></a>
      </div>
    </article>
    </div>
    <script type="text/javascript" src="../js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </body>
  <?php require_once('footer.php'); ?>
</html>
