<?php

// class = sorte moule permettant de créer des objets 
class Utilisateur {
    // variables 
    private $name ;
    private $genre ;
    private $age; 
    // methodes
    public function getName() {
        return $this->name ;
    }
    public function setName($nom) {
        $this->name = $nom ;
    }
    public function getGenre() {
        return $this->genre ;
    }
    public function setGenre($g) {
    
        $this->genre = $g ;
    }
    public function getAge() {
        return $this->age ;
    }
    public function setAge($age) {
        $this->age = $age ;
    }
    public function anneeAvantRetraite() {
        return 62 - ($this->age) ;
    }


}

// je vais créer des objets à partir du "moule" Utilisateur
// j'INSTANCIE un objet à partir de la CLASS Utilisateur

$u1 = new Utilisateur("","","") ;

$u1->setName("Jean");
$u1->setGenre("Masculin");
$u1->setAge(44);

echo "<pre>";
print_r($u1);
echo "</pre>";

echo $u1->getName()."<br>";
echo $u1->getGenre()."<br>";
echo $u1->getAge()."<br>"; 
echo $u1->anneeAvantRetraite(); 