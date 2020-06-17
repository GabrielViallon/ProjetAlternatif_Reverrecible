<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Erreur - Reverrecible</title>
  </head>
  <body>
    <div class="container-erreur">
      <img src="../Vues/Style/Logo.png" alt="">
      <?php if(isset($_GET['erreur'])) { ?>
        <p><?= $erreur?></p>
      <?php } else {?>
      <p>Une erreur s'est produite.</p>
    <?php } ?>
      <a style="color: black "href="../Controleur/mainCTRL.php">Retour au site</a>
    </div>
  </body>
</html>
