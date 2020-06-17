<?php
session_start();
require_once('../Modele/DAO.class.php');
$dao = new DAO;
$users = $dao->getAllUsers();
if(isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) {
require_once('../Vues/utilisateurs.php');
}
else {
  header("Location: ../Controleur/erreurDroitsCTRL.php");
}
?>
