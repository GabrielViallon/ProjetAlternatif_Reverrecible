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
    <?php if ($users != null) {
      if(isset($_POST['search'])) {?>
    <p>Recherche : "<?=$_POST['search']?>" : <?= count($users) ?> résultat(s).</p>
  <?php } else { ?>
    <p>La base de donnée comprend actuellement <?= count($users) ?> utilisateurs.</p>
  <?php } ?>

    <form method="post">
      <label>Rechercher un utilisateur</label>
      <input type="text" name="search">
      <input type="submit" name="submit" value="RECHERCHER">
    <?php if(isset($_POST['search'])) { ?>
      <a class="bouton" href="../Controleur/utilisateursCTRL.php"><h3>ANNULER LA RECHERCHE</h3></a>
    <?php } ?>
    </form>

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
    <p style="color : red">Aucun utilisateur trouvé.</p>
    <?php if(isset($_POST['search'])) { ?>
      <a class="bouton" href="../Controleur/utilisateursCTRL.php"><h3>ANNULER LA RECHERCHE</h3></a>
    <?php } ?>
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
                <td><a class="bouton" style="background-color: red;" href="supprimerUtilisateurCTRL.php?utilisateur=<?=$mail?>">
                  <img style="max-width:32px; max-height:32px;" src="../Vues/Style/icons8-supprimer-32.png" alt="supprimer"></a>
                <a class="bouton" style="background-color: green;" href="mailto:<?=$mail?>">
                    <img style="max-width:32px; max-height:32px;" src="../Vues/Style/forward-32.png" alt="supprimer"></a></td>
              <?php } else {?>
                <td><p>Impossible de supprimer un gérant.</p></td>
              <?php }}?>
      </tr>
      </table>
    </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
