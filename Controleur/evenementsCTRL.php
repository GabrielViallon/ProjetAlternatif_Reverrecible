<?php

include('../model/DAO.class.php');
  $dao = new DAO;
  $evenements = $dao->getEvenements(); // recuperer les evenements de la BD pour les afficher
  include('../view/actualite.view.php');

  ?>
