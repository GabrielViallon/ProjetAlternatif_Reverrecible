<?php
session_start();
if(isset($_GET['erreur'])) {
  if($_GET['erreur'] == 1) {
    $erreur = "Seuls les gérants peuvent supprimer une demande.";
  }
  if($_GET['erreur'] == 2) {
    $erreur = "Seuls les gérants peuvent supprimer un évènement.";
  }
  if($_GET['erreur'] == 3) {
    $erreur = "Seuls les gérants peuvent supprimer un utilisateur.";
  }
  if($_GET['erreur'] == 4) {
    $erreur = "Impossible de supprimer un compte gérant.";
  }
  if($_GET['erreur'] == 5) {
    $erreur = "Seuls les gérants peuvent accéder à cette page.";
  }

}
require_once('../Vues/erreurDroits.php');
 ?>
