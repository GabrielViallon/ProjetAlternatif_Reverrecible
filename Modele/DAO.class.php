<?php
  /////////////////////////DECLARATION DES CLASSES//////////////////////////////
  require_once('../Modele/User.class.php');
  require_once('../Modele/Evenement.class.php');
  require_once('../Modele/DemandePoint.class.php');
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
      $req = $sql->fetchAll(PDO::FETCH_ASSOC);
      if($req != null) {
        if(sizeof($req != 0)) {
          $utilisateur = $req[0];
          $utilisateur['gerant'] = (int) $utilisateur['gerant'];
          return new User($utilisateur);
        }
        else {
          $utilisateur = null;
          return null;
        }
      }
    }
    //----------------------------------------------------------------------------
    public function addUser(user $user){
      $nom = $user->getNom();
      $prenom = $user->getPrenom();
      $email = $user->getEMail();
      $mdp = $user->getMDP();
      $gerant = $user->getGerant();
      $dateinscription = $user->getDateInscription();

      $query = "INSERT INTO user VALUES ('$email','$nom','$prenom','$mdp','$gerant','$dateinscription')";
      $insertUser=$this->db->query($query);

      return $insertUser;

    }
    //----------------------------------------------------------------------------
    public function suppUtilisateur($utilisateur){
      $suppUtilisateur = "DELETE FROM user WHERE mail='$utilisateur'";
      return $this->db->query($suppUtilisateur);
    }
    //----------------------------------------------------------------------------
    public function getEvenements(){
      $query = "SELECT * FROM evenement ORDER BY dateEv";
      $sql= $this->db->query($query);
      $evenements = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listeEvenements = array();
      foreach ($evenements as $evenement) {
        array_push($listeEvenements,new Evenement($evenement));
      }
      return $listeEvenements;
    }
    //----------------------------------------------------------------------------
    public function getDemandePoint($adresse){
      $query = "SELECT * FROM demandePoint WHERE adresse='$adresse'";
      $sql= $this->db->query($query);
      $req = $sql->fetchAll(PDO::FETCH_ASSOC);
      if($req != null) {
        if(sizeof($req != 0)) {
          $demande = $req[0];
          return new DemandePoint($demande);
        }
        else {
          $demande = null;
          return null;
        }
      }
    }
    //----------------------------------------------------------------------------
    public function addDemandePoint(demandePoint $demande){
      $nomLieu = $demande->getNomLieu();
      $adresse = $demande->getAdresse();
      $type = $demande->getType();
      $description = $demande->getDescription();
      $email = $demande->getEMail();

      $query = "INSERT INTO demandePoint VALUES ('$nomLieu','$adresse','$type','$description','$email')";
      $insertDemande=$this->db->query($query);

      return $insertDemande;
    }
    //----------------------------------------------------------------------------
    public function getDemandesPoint(){
      $query = "SELECT * FROM demandePoint";
      $sql= $this->db->query($query);
      $demandes = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listeDemandes = array();
      foreach ($demandes as $demande) {
        array_push($listeDemandes,new DemandePoint($demande));
      }
      return $listeDemandes;
    }
    //----------------------------------------------------------------------------
    public function suppDemandePoint($adresse){
      $suppDemandePoint = "DELETE FROM demandePoint WHERE adresse='$adresse'";
      return $this->db->query($suppDemandePoint);
    }
    //----------------------------------------------------------------------------
    public function getEvenement($evenement){
      $query = "SELECT * FROM evenement WHERE nom='$nom' AND dateEv='$dateEv'";
      $sql= $this->db->query($query);
      $req = $sql->fetchAll(PDO::FETCH_ASSOC);
      if($req != null) {
        if(sizeof($req != 0)) {
          $evenement = $req[0];
          return new Evenement($evenement);
        }
        else {
          $evenement = null;
          return null;
        }
      }
    }
    //----------------------------------------------------------------------------
    public function addEvenement(evenement $evenement){
      $nom = $evenement->getNom();
      $dateEv = $evenement->getDate();
      $description = $evenement->getDescription();
      $gerant = $evenement->getGerant();

      $query = "INSERT INTO evenement VALUES ('$nom','$dateEv','$description','$gerant')";
      $insertEvenement=$this->db->query($query);

      return $insertEvenement;
    }
    //----------------------------------------------------------------------------
    public function suppEvenement($dateEv, $nom){
      $suppEvenement = "DELETE FROM evenement WHERE nom='$nom' AND dateEv='$dateEv'";
      return $this->db->query($suppEvenement);
    }

  }
  ?>
