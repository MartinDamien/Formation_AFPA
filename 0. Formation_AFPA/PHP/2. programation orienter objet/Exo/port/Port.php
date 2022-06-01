<?php
class Port {
    public $port ;

    public function __construct($v)
    {
        $this->port = $v;
        echo "<h1>Ici c'est le prot de".$v."!!!</h1><br>";
    }

    public function getport(){
        return $this->port ;
    }
}
