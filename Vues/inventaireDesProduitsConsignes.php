<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Points de collecte - Reverrecible</title>
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
            <a href="donsCTRL.php">DONS</a>
            <a href="inventaireDesProduitsConsignesCTRL.php">INVENTAIRE DES PRODUITS CONSIGNÉS</a>
            <a href="evenementsCTRL.php">EVENEMENTS</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="separateurTop"></div>
    </header>
    <h1>INVENTAIRE DES PRODUITS CONSIGNES</h1>
    <div class="separateur"></div>
    <article>
      <div class="sousArticle">
        <p>Cartographie reprenant les produits consignés que vous nous avez communiqué via le formulaire ci-dessous. Cette carte est enrichie au fur et à mesure que les réponses nous parviennent. Merci à vous !</p>
        <iframe id="cartePoints" src="https://www.google.com/maps/d/embed?mid=1JTCHzdf6wfmZNGgoP9sYmGgFzMy48SMe" width="640" height="480"></iframe>
      </div>
    </article>
    <div class="separateur"></div>
    <article class="sousArticle">
      <?php if (isset($_SESSION['nom'])) {?>
        <p>En tant que membre, vous pouvez dès à présent nous suggérer un point de collecte en remplissant le formulaire suivant.</p>
        <fieldset>

        <form action="../controle/inventaireDesProduitsConsignesCTRL.php" method="post" class="formulaire-points-consigne">
          <input type="text" name="nomLieu" size="40" required placeholder="Nom du lieu" >
          <br>
          <input type="text" name="adresse"  size="40" required  placeholder="Adresse du lieu" >
          <br>
          <input type="text" name="type" size="40"  required placeholder="Type de produit consigné" >
          <br>
          <textarea name="description" required placeholder="Description et détails complémentaires" ></textarea>
          <br>
          <input type="submit" class="bouton" value="ENVOYER">
        </form>
        <!-- <?php     global $confirmation; ?> -->
        <!-- <p style='color:green'> <?= $confirmation ?></p> -->
      </fieldset>
      <?php } else { ?>
        <p>Connectez-vous afin d'accéder au formulaire pour nous renseigner un point de consigne.</p>
        <a class="bouton" href="../Controleur/connexionCTRL.php"><h3>SE CONNECTER</h3></a>
      <?php } ?>
    </article>
    <?php require 'footer.php' ?>
  </body>
</html>
