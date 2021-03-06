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
    <!-- <div>
      <img src="Style/HEADER_LANDSCAPE_Contact.jpg" alt="" align="center">
    </div> -->
    <div class="separateurTop"></div>
    </header>
    <h1>S'inscrire en tant qu'utilisateur</h1>
    <div class="separateur"></div>

    <article class="sousArticle">
        <img style="width:70px;" src="../Vues/Style/inscription_logo.png" alt="">
        <h2>Inscription</h2>
          <fieldset>

          <form action="formulaireInscriptionCTRL.php" method="post">
            <input type="email" name="email" size="40" required placeholder="E-mail" >
            <br>
            <input type="text" name="nom"  size="40" required  placeholder="Nom" >
            <br>
            <input type="text" name="prenom"  size="40" required  placeholder="Prénom" >
            <br>
            <input type="password" name="mdp" size="40"  required placeholder="Mot de Passe" >

              <input type="submit" class="bouton" value="INSCRIPTION">

            <br>
            <?php global $erreur; ?>
            <p style='color:red'> <?=$erreur ?></p>
          </form>
        </fieldset>
        <p>Vous avez déjà un compte ? <a style="color:#0099cc;" href="../Controleur/connexionCTRL.php">Se connecter</a> </p>
    </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
