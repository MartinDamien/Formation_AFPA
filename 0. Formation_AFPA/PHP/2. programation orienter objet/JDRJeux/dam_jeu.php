<?php

abstract class Personnage{
    private $nom;

    public function getNom(){
        return $this->nom;
    }

    abstract function combattre();//class declarer et non definie
                                  //toute classe qui heritera devra
                                  // definir cette fonction combattre
}

// heriton d'autre classe qui vont creer les personnage pour le jeu

class nain extends Personnage{
    public function combattre(){
        echo "Je suis un nain et je combat avec une masse";
    }
}

class guerrier extends Personnage{
    public function combattre(){
        echo "Je suis un guerrier et je combat avec une epee";
    }
}

class archer extends Personnage{
    public function combattre(){
        echo "Je suis un archer et je combat avec un arc";
    }
}

$personnages = [new nain(), new guerrier(), new archer()];
echo "<pre>";
print_r($personnages);
echo "</pre>";

foreach($personnages as $p){
    $p->combattre();
}

?>