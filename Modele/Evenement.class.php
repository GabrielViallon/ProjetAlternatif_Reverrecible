<?php
class Evenement{
    //////////////////////declaration des attributs///////////////////
    private $nom;
    private $dateEv;
    private $description;
    private $gerant;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }
    //////////////////declaration des getter//////////////////////
    public function getNom() {return $this->nom;}
    public function getDate(){return $this->dateAct;}
    public function getDescription() {return $this->description;}
    public function getGerant(){return $this->coach;}
  }
?>
