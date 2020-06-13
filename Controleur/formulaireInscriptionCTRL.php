<?php
// Utilisation de la DAO
require_once('../Modele/DAO.class.php');
$dao = new DAO;

if (isset($_POST["email"])) {
  $emailF = $_POST['email'];
  $nomF = $_POST['nom'];
  $prenomF = $_POST['prenom'];
  $mdpF = $_POST['mdp'];
}


if (isset($_POST["email"]) && $dao.getUser($emailF) == null) {
  $dao.addUser($nomF, $prenomF, $emailF, $mdpF);
} else {
  //echo 'Le mail a déjà été utilisé !';
}

require_once('../Vues/formulaireInscription.php');
 ?>
