<?php

require_once('../Modele/DAO.class.php');
  $dao = new DAO;
  $evenements = $dao->getEvenements(); // recuperer les evenements de la BD pour les afficher
  session_start();

  if (isset($_POST['nom'])
    && isset($_POST['dateEv']) && isset ($_POST['description'])) {
      $nom = $_POST['nom'];
      $dateEv = $_POST['dateEv'];
      $description = $_POST['description'];
      $gerant = $_SESSION['prenom'] . " " . $_SESSION['nom'];

      $evenement = $dao->getEvenement($adresse);

      if($evenement == null) {
        $param = array("nom"=>$nom,"dateEv"=>$dateEv,"description"=>$description,"gerant"=>$gerant);
        $evenement = new Evenement($param);
        $dao->addEvenement($evenement);
        header('Location: evenementsCTRL.php');
      }
    }

  require_once('../Vues/evenements.php');

  ?>
