<?php 
class Bateau implements Amarable {

    public $masse ;
    
    public function affiche() {
            echo "<h2>je suis une instance de la classe  ".__CLASS__."</h2>" ;
    }

    public function setMasse($m) {
        $this->masse = $m;
    }

    public function nbcordes() {
        return ($this->masse) / 10 ;    
    }
}
?>