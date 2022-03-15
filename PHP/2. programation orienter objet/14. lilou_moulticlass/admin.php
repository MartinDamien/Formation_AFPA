<?php
class Admin extends Utilisateur {
    // attributs
    private $salaire ;
    // fonctions ou méthodes
    public function setSalaire($s) {
        $this->salaire = $s ;
    }
    public function getSalaire() {
       return $this->salaire;
    }
}
?>