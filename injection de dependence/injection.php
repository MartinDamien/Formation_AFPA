<?php

class personne
{
    private $nom;
    private $prenom;
    private $adresse;

}

class adresse{
    private $numero;
    private $rue ;
    private $codePostal ;
    private $ville ;

    public function __construct($numero, $rue, $codePostal, $ville)
    {
        $this->numero = $numero;
        $this->rue = $rue;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }
}


