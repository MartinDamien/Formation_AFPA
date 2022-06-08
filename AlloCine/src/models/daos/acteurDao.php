<?php

namespace alloCine\models\daos;

use alloCine\models\entities\Acteur;

class ActeurDao extends Model
{
    public function creeObj($fields)
    {
        $acteur = new Acteur();
        $acteur->setId($fields['id']);
        $acteur->setNom($fields['first_name']);
        $acteur->setPrenom($fields['last_name']);
        return $acteur;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM actor";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $acteurs = [];
            while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($acteurs, $this->creeObj($row));
            }
            return $acteurs;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM actor WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if ($result) {
            $lob = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $this->creeObj($lob);
        }
    }
    public function create($actor)
    {
        //  print_r($actor) ; die ; 
        $sql = "INSERT INTO actor (first_name,last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$actor['nom'], $actor['prenom']]);
    }
    
    public function update($actor)
    {
        $sql = "UPDATE actor SET first_name = ?, last_name = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$actor['nom'], $actor['prenom'], $actor['id']]);
    }
}
