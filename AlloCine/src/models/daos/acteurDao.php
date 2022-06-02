<?php

namespace AlloCine\models\daos;

use AlloCine\models\daos\Model;

class ActeurDao extends Model
{
    public function creeObj($fields)
    {
        $acteur = new Acteur();
        $acteur->setId($fields['id']);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM acteur";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $acteurs = [];
            while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                //    $acteurs[] =  $this->creeObj($row) ;  
                array_push($acteurs, $this->creeObj($row));
            }
            return $acteurs;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM acteur WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if ($result) {
            //   return $stmt->fetchObject(Actor::class);
            $lob = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $this->creeObj($lob);
            // renvoi le resultat de la requête sous forme d'objet Actor. 
        }
    }
}
