<?php
class Professeur
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $specialites = array();

    public function __construct($i, $n, $p, $e)
    {
        $this->id = $i;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
    }

    public function addspecialite($code, $libelle)
    {
        $this->specialites[] = new Specialite($code, $libelle);
    }

    public function afficheSpecialite()
    {
        foreach ($this->specialites as $s) {
            $s->affiche();
        }
    }
}
