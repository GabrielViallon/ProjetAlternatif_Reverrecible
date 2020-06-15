<?php
// Utilisation de la DAO
require_once('../Modele/DAO.class.php');
$dao = new DAO;

if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==1) {
    $erreur = "Le mail que vous avez entré est déjà utilisé";
  }
}
else {
  $erreur="";
}

if (isset($_POST['email'])
  && isset($_POST['nom'])
  && isset($_POST['prenom'])
  && isset($_POST['mdp'])) {

  $email = $_POST['email'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mdp = $_POST['mdp'];

  $user = $dao->getUser($email);

  if($user==null) {
    $param = array("email"=>$email,"nom"=>$nom,"prenom"=>$prenom,"mdp"=>$mdp);
    $dao->addUser(new User($param));
  } else {
    //echo 'Le mail a déjà été utilisé !';
  }
} else {
  include('../Vues/formulaireInscription.php');
}

 ?>
