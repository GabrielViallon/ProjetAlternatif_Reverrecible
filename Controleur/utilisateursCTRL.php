<?php
require_once('../Modele/DAO.class.php');
$dao = new DAO;
$users = $dao->getAllUsers();
session_start();
require '../Vues/utilisateurs.php';
?>
