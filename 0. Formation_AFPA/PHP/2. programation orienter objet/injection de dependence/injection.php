<?php

use Adresse as GlobalAdresse;

class Adresse{
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

    public function getNumero(): int{
        return $this->numero;
    }

    public function getRue(): string{
        return $this->rue;
    }

    public function getCodePostal():int{
        return $this->codePostal;
    }

    public function getVille():string{
        return $this->ville;
    }
}

class personne
{
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct($nom, $prenom, Adresse $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    public function carteVisite(){
        echo('<h1>'.$this->nom.' '.$this->prenom.'</h1>');
        echo ('<p>'.$this->adresse->getNumero().' '.$this->adresse->getRue() ." ".$this->adresse->getCodePostal().' '.$this->adresse->getVille().'</p>');
    }
}
$adr = new Adresse('1','rue de la paix','75000','paris');
$p = new personne('Dupont', 'Jean', $adr);
$p->carteVisite();

