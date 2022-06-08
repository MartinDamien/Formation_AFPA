<?php

namespace alloCine\models\daos;

use AlloCine\models\entities\genre;

class GenreDao extends Model{
    public function creeObj($fields){
        $genre = new Genre();
        $genre->setId($fields['id']);
        $genre->setNom($fields['name']);
    }
    
    public function findAll(){
        $sql = "SELECT * FROM genre";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $genres = [];
            while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($genres, $this->creeObj($row));
            }
            return $genres;
        }
    }
    
    public function findById($id){
        $sql = "SELECT * FROM genre WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$id]);
        if ($result) {
            $lob = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $this->creeObj($lob);
        }
    }
}