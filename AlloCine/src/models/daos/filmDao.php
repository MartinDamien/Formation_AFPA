<?php

namespace alloCine\models\daos;

use alloCine\models\entities\film;

class FilmDao extends Model
{
    public function creeObj($fields)
    {
        $film = new Film();
        $film->setId($fields['id']);
        $film->setTitre($fields['title']);
        $film->setDescription($fields['description']);
        $film->setDuree($fields['duration']);
        // $film->setDate(new DateTime($fields['date']));
        $film->setCouverture($fields['cover_image']);
        // $film->setGenre($fields['genre']);

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