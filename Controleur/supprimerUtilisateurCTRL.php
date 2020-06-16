<?php
require_once('../Modele/DAO.class.php');
$dao = new DAO;
$utilisateur = $dao->suppUtilisateur($_GET['utilisateur']);
header("Location: ../Controleur/utilisateursCTRL.php");
 ?>
