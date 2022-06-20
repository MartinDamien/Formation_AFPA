<?php 
class Port {
    public $port ;

    public function __construct($v){
        $this->port = $v;
        echo "<h1>Ici c'est le port de ".$v." !!!</h1>";                
    }

    public function getPort() {
        return $this->port ;
    }


    function accueilEngin(Amarable $amarable) {
        echo "<h3> >> Le nombre de cordes nécessaires pout m'amarrer est de: ".$amarable->nbcordes()."</h3>";
    }
}
?>