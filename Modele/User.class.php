<?php
  //classe des users
  class User { // classe de user
    //////////////////////declaration des attributs///////////////////
    protected $nom;
    protected $prenom;
    protected $email;
    protected $mdp;
    protected $gerant;
    protected $dateinscription;

    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
      }

    //////////////////declaration des getter//////////////////////
    public function getNom() {return $this->nom;}
    public function getPrenom() {return $this->prenom;}
    public function getEMail() {return $this->email;}
    public function getMDP() {return $this->mdp;}
    public function getGerant() {return $this->gerant;}
    public function getDateInscription() {return $this->dateInscription;}
  }
  ?>
