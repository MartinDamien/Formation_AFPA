<?php

namespace mvcobjet\models\daos;
use mvcobjet\models\entities\acteur;

class ActeurDao extends BaseDao
{

    public function creeObj($fields)
    {
        $acteur = new acteur();
        $acteur->setId($fields['id']);
        $acteur->setPrenom($fields['prenom']);
        $acteur->setNom($fields['nom']);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM acteur";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $acteurs = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $acteurs[] = $this->creeObj($row);
            }
            return $acteurs;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM acteur WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $result = $stmt->execute();
        if ($result) {
            $row = $stmt->fetch(Acteur::class);
            return $this->creeObj($row);
            // renvoie le resultat de la requete
        }
    }
}
