<?php

/////////////////declaration/////////////////////////////////////////////
require_once('../Modele/DAO.class.php');
$dao = new DAO;

/////////////////////////////////////////////////////////////////////////

///////////////// Si message d'erreur detecter //////////////////////////

if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==1) {
    $erreur = "Le mail que vous avez entré est incorrect";
  }else {
    $erreur = "Le mot de passe que vous avez entré est incorrect";
  }
}
else {
  $erreur="";
}

/////////////////////////////////////////////////////////////////////////

///////////////// Si formulaire est rempli /////////////////////////////

if (isset($_POST['email'])
  && isset($_POST['mdp'])) {

    // Initialisation des variables
    $email=$_POST['email'];
    $motdepasse=$_POST['mdp'];

    $user = $dao->getUser($email);

    // Vérification que le mail existe
    if ($user!=null) {
      if ($user->getMDP()==$motdepasse) {
        //recuperer le prenom du profil
        // if ($dao->estCoach($email)) {
        //   $adh = $dao->getCoach($email);
        // } else {
        //   $adh = $dao->getAdherent($email);
        // }
        session_start();
        $_SESSION['mail'] = $user->getEMail();
        $_SESSION['prenom'] = $user->getPrenom();
        // Affichage du profil
        header('Location: profilCTRL.php?');
      } else {

        // Si le mot de passe est faut
        header('Location: connexionCTRL.php?erreur=2');
      }
    } else {
      // Si le mail n'existe pas
      header('Location: connexionCTRL.php?erreur=1');
    }
// Si formulaire non rempli afficher la vue inscription
} else {
  include('../Vues/connexion.php');
}

 ?>
