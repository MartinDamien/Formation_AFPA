<?php

namespace mvcobjet\models\daos;

use mvcobjet\models\Entities\Actor;

class ActorDao extends BaseDao
{

    public function creeObj($fields)
    {
        $acteur = new Actor();
        $acteur->setId($fields['id']);
        $acteur->setFirstName($fields['first_name']);
        $acteur->setLastName($fields['last_name']);
        return $acteur;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM actor";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $actors = [];
            while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                //    $actors[] =  $this->creeObj($row) ;  
                array_push($actors, $this->creeObj($row));
            }
            return $actors;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM actor WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $result = $stmt->execute([$id]);
        if ($result) {
            //   return $stmt->fetchObject(Actor::class);
            $lob = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $this->creeObj($lob);
            // renvoi le resultat de la requête sous forme d'objet Actor. 
        }
    }

    public function create($actor)
    {
        //  print_r($actor) ; die ; 
        $sql = "INSERT INTO actor (first_name,last_name) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$actor['nom'], $actor['prenom']]);
    }
    
    public function update($actor) //ajouter recement
    {
        $sql = "UPDATE actor SET first_name = ?, last_name = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$actor['nom'], $actor['prenom'], $actor['id']]);
    }
}
