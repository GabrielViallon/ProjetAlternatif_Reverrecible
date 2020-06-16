<?php
require_once('../Modele/DAO.class.php');
$dao = new DAO;
$demande = $dao->suppDemandePoint($_GET['demande']);
header("Location: ../Controleur/inventaireDesProduitsConsignesCTRL.php");
 ?>
