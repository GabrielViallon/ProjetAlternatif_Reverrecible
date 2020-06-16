<?php
class DemandePoint{
    //////////////////////declaration des attributs///////////////////
    private $nomLieu;
    private $adresse;
    private $type;
    private $description;
    private $email;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }
    //////////////////declaration des getter//////////////////////
    public function getNomLieu() {return $this->nomLieu;}
    public function getAdresse(){return $this->adresse;}
    public function getType() {return $this->type;}
    public function getDescription(){return $this->description;}
    public function getEMail() {return $this->email;}
  }
?>
