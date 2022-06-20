<?php 
// CLASSE ABSTRAITE
// Donc l'autre jour on a parlé des classes abstraite donc une classe abstraite c'est une classe dont au moins une des fonctions est abstraite c'est-à-dire que cette fonction elle est déclarée mais elle n'est pas défini 
// elle ne pourra être déclaré que dans la classe qui va en hériter
// Vous pourrez voir ça donc sur l'enregistrement que j'ai effectué vendredi matin

// Ensuite donc on a parlé des inter
// faces. Les interfaces en fait sont en gros des cas ça serait où il y a que des fonctions abstraite 
// donc ce sont des classes qu'on peut pas instant sied donc il faut si on a appelé menthe c'est classe 
// donc c'est plus un héritage assez on les appelle ça implémentation c'est une sorte d'héritage 
// mais de fonction abstraite ne sont pas défini toujours il faut absolument donc définir ses fonctions 
// on est dans la classe de la classe qui les implémentent. 

// On va simuler en espèces de petits jeux en utilisant des personnages qui vont se battre 

// Donc soit une classe abstraite qui a qui a une fonction abstraite

abstract class Personnage {
    private $nom;

    public function getNon() {
        return $this->nom ;
    }

    abstract  function combattre();     // CLASSE DECLAREE ET NON DEFINIE 
                                        // TOUTE CLASSE QUI HERITERA DEVRA 
                                        // DEFINIR CETTE FONCTION combattre.
                                      
}

// Heritons d'autres classes qui vont créer les personnages pour le jeu

class Nain extends Personnage {
    public function combattre() {
        echo "moi le nain je tape avec une masse";
    }
}

class Guerrier extends Personnage {
    public function combattre() {
        echo "moi le guerrier je tranche avec une hache";
    }
}

class Archer extends Personnage {
    public function combattre() {
        echo "moi l'archer je cible avec mes flêches";
    }
}

$personnages = [new Nain() , new Guerrier(), new Archer()];  

print_r($personnages);

foreach($personnages as $p ) {
    $p->combattre();
}

// L'intéressé c'est que je peux utiliser cette boucle pour faire combattre tous mes guerriers soldats Anna etc.
// Sans cette possibilité d'abstraction et il a faim il faut Caprès la création de chaque objet j'exécute la fonction combattre sur chacun de ses objets si je n'avais pas eu l'abstraction il a fallu que je fasse comme ça
// ne tapez pas je montre simplement comment ça serait dans abstraction

?>