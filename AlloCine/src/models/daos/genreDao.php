<?php

namespace alloCine\models\daos;

use alloCine\models\entities\genre;

class GenreDao extends Model
{
    public function creeObj($fields)
    {
        $genre = new Genre();
        $genre->setId($fields['id']);
        $genre->setNom($fields['name']);
        return $genre;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM genre";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $genres = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($genres, $this->creeObj($row));;
            }return $genres;
        }
    }
}
