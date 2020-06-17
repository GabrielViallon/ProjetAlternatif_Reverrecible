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
      <?php if (isset($_SESSION['nom']) && isset($_SESSION['gerant']) && $_SESSION['gerant'] == 0) {?>
        <p>En tant que membre, vous pouvez dès à présent nous suggérer un point de collecte en remplissant le formulaire suivant.</p>
        <fieldset>

        <form action="../Controleur/inventaireDesProduitsConsignesCTRL.php" method="post" class="formulaire-points-consigne">
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
    <?php } else if (isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) { ?>
      <p>En tant que gérant, vous pouvez consulter les suggestions de points en attente et les supprimer au fur et à mesure que les points correspondants sont ajoutés à la carte.</p>
      <?php if ($demandes != null) {?>
      <table>
      <tr>
        <th>Nom du lieu</th>
        <th>Adresse</th>
        <th>Type de produit consigné</th>
        <th>Description et détails</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    <?php } else {?>
      <p style="color : red">Aucune demande de point disponible.</p>
    <?php } ?>
      <?php foreach ($demandes as $demande) { ?>
        <tr>
                  <?php
                  $nomLieu = $demande->getNomLieu();
                  $adresse = $demande->getAdresse();
                  $type = $demande->getType();
                  $description = $demande->getDescription();
                  $email = $demande->getEMail();
                   ?>

                  <td><?=$nomLieu?></td>
                  <td><?=$adresse?></td>
                  <td><?=$type?></td>
                  <td><?=$description?></td>
                  <td><?=$email?></td>
                  <td><a class="bouton "style="background-color : red" href="supprimerDemandeCTRL.php?demande=<?=$adresse?>"><img style="max-width:32px; max-height:32px;" src="../Vues/Style/icons8-supprimer-32.png" alt="supprimer"></a></td>
                  <?php } ?>
        </tr>
      <?php } else { ?>
        <p>Connectez-vous afin d'accéder au formulaire pour nous renseigner un point de consigne.</p>
        <a class="bouton" href="../Controleur/connexionCTRL.php"><h3>SE CONNECTER</h3></a>
      <?php } ?>
    </table>
    </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
