<?php

class Plat {
    private $nom;
    private $prix;
    private $description;
    
    public function __construct($nom, $prix, $description) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function getPrix() {
        return $this->prix;
    }
    
    public function setPrix($prix) {
        $this->prix = $prix;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
}
