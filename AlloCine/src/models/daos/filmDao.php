<?php

namespace AlloCine\models\daos;

use AlloCine\models\entities\film;

class FilmDao extends Model
{
    public function creeObj($fields)
    {
        $film = new Film();
        $film->setId($fields['id']);
        $film->setTitre($fields['title']);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM movie";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $films = [];
            while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($films, $this->creeObj($row));
            }
            return $films;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM movie WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if ($result) {
            $lob = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $this->creeObj($lob);
        }
    }
}