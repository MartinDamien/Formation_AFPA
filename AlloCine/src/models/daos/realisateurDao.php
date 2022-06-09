<?php
namespace alloCine\models\daos;

use alloCine\models\entities\realisateur;

class RealisateurDao extends Model{
    public function creeObj($fields){
        $realisateur = new Realisateur();
        $realisateur->setId($fields['id']);
        $realisateur->setNom($fields['last_name']);
        $realisateur->setPrenom($fields['first_name']);
        return $realisateur;
    }	

    public function findAll(){
        $sql = "SELECT * FROM director";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if ($result) {
            $realisateurs = [];
            while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($realisateurs, $this->creeObj($row));
            }
            return $realisateurs;
        }
    }

    public function findById($id){
        $sql = "SELECT * FROM director WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $result = $stmt->execute();
        if ($result) {
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $this->creeObj($row);
        }
    }
}