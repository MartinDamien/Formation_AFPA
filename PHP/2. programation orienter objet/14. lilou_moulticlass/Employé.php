<?php
class Employe extends Utilisateur
{
    // attributs
    private $nombre_heure;
    // fonctions ou méthodes
    public function setHeure($h)
    {
        $this->nombre_heure = $h;
    }
    public function getHeure()
    {
        return $this->nombre_heure;
    }
}
