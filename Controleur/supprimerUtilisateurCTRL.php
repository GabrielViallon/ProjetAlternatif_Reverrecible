<?php
session_start();
require_once('../Modele/DAO.class.php');
$dao = new DAO;
if(isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) {
  $temp = $dao->getUser($_GET['utilisateur']);
  if($temp->getGerant() != 1) {
    $utilisateur = $dao->suppUtilisateur($_GET['utilisateur']);
    header("Location: ../Controleur/utilisateursCTRL.php");
  }
  else {
    header("Location: ../Controleur/erreurDroitsCTRL.php?erreur=4");
  }
}
else {
  header("Location: ../Controleur/erreurDroitsCTRL.php?erreur=3");
}
 ?>
