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
    <h1>Se connecter</h1>
    <div class="separateur"></div>

    <article class="sousArticle">
      <img style="width:70px;" src="../Vues/Style/connexion_logo.png" alt="">
      <h2>Connexion</h2>
      <fieldset>
      <form action="../Controleur/connexionCTRL.php" method="post">
        <input type="email" placeholder="Adresse mail" name="email" id="email" required/>
        <br>
        <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required/>
        <input type="submit" class="bouton" value="CONNEXION">
        <br>
        <?php global $erreur; ?>
        <p style='color:red'> <?=$erreur ?></p>
      </form>
    </fieldset>
      <p>Vous n'avez pas encore de compte ? <a style="color:#0099cc;" href="../Controleur/formulaireInscriptionCTRL.php">S'inscrire</a> </p>
  </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
