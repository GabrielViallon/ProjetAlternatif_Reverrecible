<?php
require_once('../Modele/DAO.class.php');
$dao = new DAO;
$evenement = $dao->suppEvenement($_GET['date'],$_GET['nom']);
header("Location: ../Controleur/evenementsCTRL.php");
 ?>
