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
  $gerant = 0;
  $dateinscription = date("Y-m-d");

  $user = $dao->getUser($email);

  if($user==null) {
    $param = array("mail"=>$email,"nom"=>$nom,"prenom"=>$prenom,"mdp"=>$mdp, "gerant"=>$gerant, "dateinscription"=>$dateinscription);
    $user = new User($param);
    $dao->addUser($user);

    session_start();
    $_SESSION['mail'] = $user->getEMail();
    $_SESSION['prenom'] = $user->getPrenom();
    $_SESSION['nom'] = $user->getNom();
    $_SESSION['gerant'] = $user->getGerant();
    header('Location: profilCTRL.php?');
  } else {
    header('Location: formulaireInscriptionCTRL.php?erreur=1');
  }
} else {
  include('../Vues/formulaireInscription.php');
}

 ?>
