<?php
if (isset($_POST["email"])) {
  $emailF = $_POST['email'];
  $nomF = $_POST['nom'];
  $prenomF = $_POST['prenom'];
  $mdpF = $_POST['mdp'];
}

require '../Modele/reverrecibleModeleBD.php';
require '../Vues/formulaireInscription.php';

if (isset($_POST["email"]) && !userExists($emailF)) {
  addUser($nomF, $prenomF, $emailF, $mdpF);
} else {
  //echo 'Le mot de passe a déjà été utilisé !';
}

 ?>
