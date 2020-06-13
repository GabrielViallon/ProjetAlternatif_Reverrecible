<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reverrecibleBD";

try {
 $conn = new PDO("mysql:host=$servername", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "CREATE DATABASE reverrecibleBD";
 // use exec() because no results are returned
 $conn->exec($sql);
 echo "Database created successfully<br>";
} catch(PDOException $e) {
 //echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // sql to create table
   $sql = "CREATE TABLE users (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(30) NOT NULL,
   prenom VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   mdp VARCHAR(30) NOT NULL
   )";

   // use exec() because no results are returned
   $conn->exec($sql);
   echo "Table reverrecibleBD created successfully";
  } catch(PDOException $e) {
   //echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;
?>
