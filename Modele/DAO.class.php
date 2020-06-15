<?php
  /////////////////////////DECLARATION DES CLASSES//////////////////////////////
  require_once('../Modele/User.class.php');
  //////////////////////////////////////////////////////////////////////////////
  class DAO {

    private $db;
    private $database = '../Modele/data/db/reverrecible.db';

    public function __construct() {
      global $test;
      if (! file_exists($this->database)) {
        die ("Database error: file not found '".$this->database."'\n");
      }
      if (!is_writable($this->database)) {
        die ("Database error: file not writable '".$this->database."'\n");
      }

      try {
        $this->db = new PDO("sqlite:".$this->database);
        if (!$this->db) {
          die ("Database error: cannot open '".$this->database."'\n");
        }
      } catch (PDOException $e) {
        die("PDO Error :".$e->getMessage()." '".$this->database."'\n");
      }
    }

    public function getAllUsers(){
      $query = "SELECT * FROM user ORDER BY nom";
      $sql= $this->db->query($query);
      $utilisateurs = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listeUtilisateurs = array();
      foreach ($utilisateurs as $user ) {
        array_push($listeUtilisateurs,new User($user));
      }
      return $listeUtilisateurs;
    }
    //----------------------------------------------------------------------------
    public function getUser($email){
      $query = "SELECT * FROM user WHERE mail='$email'";
      $sql= $this->db->query($query);
      $utilisateur = $sql->fetchAll(PDO::FETCH_ASSOC)[0];

      if ($utilisateur==null) {
        return null;
      }
      else {
        return new User($utilisateur);
      }
    }
    //----------------------------------------------------------------------------
    public function addUser(user $user){
      $nom = $user->getNom();
      $prenom = $user->getPrenom();
      $email = $user->getEMail();
      $mdp = $user->getMDP();

      $query = "INSERT INTO user VALUES ('$email','$nom','$prenom','$mdp')";
      $insertUser=$this->db->query($query);

      return $insertUser;

    }
  }
  ?>
