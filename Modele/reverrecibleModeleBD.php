<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reverrecibleBD";

function addUser($nom, $prenom, $email, $mdp){
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users(nom,prenom,email,mdp) VALUES(
      $nom,
      $prenom,
      $email,
      $mdp
    )";
    // use exec() because no results are returned
    $conn->exec($sql);
  } catch (PDOException $e) {
    //echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;
}

function userExists($email){
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users WHERE email = $email";
    // use exec() because no results are returned
    return $conn->exec($sql)->fetch() > 0;
  } catch (PDOException $e) {
    //echo $sql . "<br>" . $e->getMessage();
    return false;
  }
  $conn = null;
}
?>
