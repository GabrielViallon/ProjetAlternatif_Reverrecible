<?php

include('../Modele/DAO.class.php');
  $dao = new DAO;
  $evenements = $dao->getEvenements(); // recuperer les evenements de la BD pour les afficher
  include('../Vues/evenements.php');

  ?>
