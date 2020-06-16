<?php
require_once('../Modele/DAO.class.php');
$dao = new DAO;
$demandes = $dao->getDemandesPoint(); // recuperer les demandes de la BD pour les afficher
session_start();


if (isset($_POST['nomLieu'])
  && isset($_POST['adresse']) && isset ($_POST['type']) && isset($_POST['description'])) {
    $nomLieu = $_POST['nomLieu'];
    $adresse = $_POST['adresse'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $email = $_SESSION['mail'];

    $demande = $dao->getDemandePoint($adresse);

    if($demande == null) {
      $param = array("nomLieu"=>$nomLieu,"adresse"=>$adresse,"type"=>$type,"description"=>$description,"email"=>$email);
      $demande = new DemandePoint($param);
      $dao->addDemandePoint($demande);
      header('Location: inventaireDesProduitsConsignesCTRL.php');
    }
  }

require_once('../Vues/inventaireDesProduitsConsignes.php');
?>
