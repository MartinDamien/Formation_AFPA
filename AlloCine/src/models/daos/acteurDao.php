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
            $result = $this->creeObj($lob);
            var_dump($result);
        }
    }
    public function create($acteur)
    {
        //  print_r($acteur) ; die ; 
        $sql = "INSERT INTO actor (first_name,last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$acteur['nom'], $acteur['prenom']]);
    }
    
    public function update($acteur)
    {
        $sql = "UPDATE actor SET first_name = ?, last_name = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$acteur['nom'], $acteur['prenom'], $acteur['id']]);
    }
}