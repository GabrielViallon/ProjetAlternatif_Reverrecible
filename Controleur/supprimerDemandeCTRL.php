<?php
session_start();
require_once('../Modele/DAO.class.php');
$dao = new DAO;
if(isset($_SESSION['gerant']) && $_SESSION['gerant'] == 1) {
$demande = $dao->suppDemandePoint($_GET['demande']);
header("Location: ../Controleur/inventaireDesProduitsConsignesCTRL.php");
}
else {
  header("Location: ../Controleur/erreurDroitsCTRL.php");
}
 ?>
