<?php
session_start();
require_once('../Modele/DAO.class.php');
$dao = new DAO;
if (isset($_POST['submit'])) {
  if(isset($_POST['search'])) {
    $users = $dao->searchUser($_POST['search']);
  }
}
else {
  $users = $dao->getAllUsers();
}
if(isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) {
require_once('../Vues/utilisateurs.php');
}
else {
  header("Location: ../Controleur/erreurDroitsCTRL.php");
}
?>
