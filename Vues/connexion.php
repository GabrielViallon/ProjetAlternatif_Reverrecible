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
    <!-- <div>
      <img src="Style/HEADER_LANDSCAPE_Contact.jpg" alt="" align="center">
    </div> -->
    <div class="separateurTop"></div>
    </header>
    <h1>Se connecter</h1>
    <div class="separateur"></div>

    <article>
    <div id="divco">
      <img src="../view/src/img/connexion_logo.png" alt="">
      <h1>Connexion</h1>
      <form class="connexion" action="../Controleur/connexionCTRL.php" method="post">
        <fieldset>
          <p>
            <!-- <label for="mail"><h2>Adresse mail</h2></label> -->
            <input type="email" placeholder="Adresse mail" name="email" id="email" required/>
          </p>
          <p>
            <!-- <label for="mdp"><h2>Mot de passe </h2></label> -->
            <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required/>
          </p>
          <input type="submit" id="submit" value="Connexion">
          <!-- <p><a id="inscription" href="../controle/motDePasseOublie.ctrl.php">Mot de passe oublié ?</a></p> -->
          <br>
          <?php global $erreur; ?>
          <!-- <br>
          <br> -->
          <p style='color:red'> <?=$erreur ?></p>
        </fieldset>
      </form>
      <p>Vous n'avez pas encore de compte ? <a style="color:#0099cc;" href="../Controleur/formulaireInscriptionCTRL.php">S'inscrire</a> </p>
    </div>
  </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
