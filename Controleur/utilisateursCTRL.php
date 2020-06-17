<?php
session_start();
require_once('../Modele/DAO.class.php');
$dao = new DAO;
if (isset($_POST['submit'])) {
  if(isset($_POST['searchName'])) {
    $users = $dao->searchUserName($_POST['searchName']);
  }
  elseif(isset($_POST['searchFirstName'])) {
    $users = $dao->searchUserFirstName($_POST['searchFirstName']);
  }
  elseif(isset($_POST['searchMail'])) {
    $users = $dao->getUser($_POST['searchMail']);
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
