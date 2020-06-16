<?php
session_start();
session_destroy();
header("Location: ../Controleur/mainCTRL.php");
 ?>
