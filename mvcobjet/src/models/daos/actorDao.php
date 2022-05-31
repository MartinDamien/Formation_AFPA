<?php

namespace mvcobjet\models\daos;
use mvcobjet\models\entities\Actor;

class ActorDao extends BaseDao
{

    public function creeObj($fields)
    {
        $Actor = new Actor();
        $Actor->setId($fields['id']);
        $Actor->setPrenom($fields['first_name']);
        $Actor->setNom($fields['last_name']);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM Actor";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $Actors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $Actors[] = $this->creeObj($row);
            }
            return $Actors;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM Actor WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $result = $stmt->execute();
        if ($result) {
            $row = $stmt->fetch(Actor::class);
            return $this->creeObj($row);
            // renvoie le resultat de la requete
        }
    }
}
