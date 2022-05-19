<?php
class Employe extends Personnage
{
    private $emploi;
    private $salaire;
    // cette classe hérite des attribut et methodes de la classe parente Personnage
    // et on peut en rajouter

    public function setEmploi($emp)
    {
        $this->emploi = "soudeur";
    }

    public function setSalaire($montant)
    {
        $this->salaire = 2000;
    }

    public function getEmploi()
    {
        return $this->Emploi;
    }
    public function getSalaire()
    {
        return $this->Salaire;
    }
}
