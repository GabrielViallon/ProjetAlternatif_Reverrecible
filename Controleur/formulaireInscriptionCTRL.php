<?php
// Utilisation de la DAO
require_once('../Modele/DAO.class.php');
$dao = new DAO;

if (isset($_POST["email"])) {
  $emailF = $_POST['email'];
  $nomF = $_POST['nom'];
  $prenomF = $_POST['prenom'];
  $mdpF = $_POST['mdp'];

  if($dao->getUser($emailF) == null) {
    $param = array("email"=>$emailF,"nom"=>$nomF,"prenom"=>$prenomF,"mdp"=>$mdpF);
    $dao->addUser(new User($param));
  } else {
    //echo 'Le mail a déjà été utilisé !';
  }
}

require_once('../Vues/formulaireInscription.php');
 ?>
