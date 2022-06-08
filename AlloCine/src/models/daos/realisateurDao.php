<?php
namespace AlloCine\models\daos;

use AlloCine\models\entities\realisateur;

class RealisateurDao extends Model{
    public function creeObj($fields){
        $realisateur = new Realisateur();
        $realisateur->setId($fields['id']);
        $realisateur->setNom($fields['last_name']);
        $realisateur->setPrenom($fields['first_name']);
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
}