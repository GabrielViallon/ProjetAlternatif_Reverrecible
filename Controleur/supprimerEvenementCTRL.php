<?php
session_start();
require_once('../Modele/DAO.class.php');
$dao = new DAO;
if(isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) {
$evenement = $dao->suppEvenement($_GET['date'],$_GET['nom']);
header("Location: ../Controleur/evenementsCTRL.php");
}
else {
  header("Location: ../Controleur/erreurDroitsCTRL.php");
}
 ?>
