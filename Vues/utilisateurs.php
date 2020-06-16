<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>utilisateurs - Reverrecible</title>
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
    <h1>LISTE DES UTILISATEURS</h1>
    <div class="separateur"></div>
    <?php if ($users != null) {?>
    <h2>La base de donnée comprend actuellement <?= count($users) ?> utilisateurs.</h2>
    <article class="sousArticle">

    <table>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Email</th>
      <th>Date d'inscription</th>
      <th>Action</th>
    </tr>
  <?php } else {?>
    <p style="color : red">Aucune demande de point disponible.</p>
  <?php } ?>
    <?php foreach ($users as $user) { ?>
      <tr>
                <?php
                $nom = $user->getNom();
                $prenom = $user->getPrenom();
                $mail = $user->getEMail();
                $date = $user->getDateInscription();
                 ?>

                <td><?=$nom?></td>
                <td><?=$prenom?></td>
                <td><?=$mail?></td>
                <td><?=$date?></td>
                <?php if ($user->getGerant() != 1) {?>
                <td><a style="color : red" href="supprimerUtilisateurCTRL.php?utilisateur=<?=$mail?>">Supprimer</a></td>
              <?php } else {?>
                <td><p>Impossible de supprimer un gérant.</p></td>
              <?php }}?>
      </tr>
      </table>
    </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
