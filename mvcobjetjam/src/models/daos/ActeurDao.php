<?php 
namespace mvcobjet\models\daos;
use mvcobjet\models\Entities\acteur;

class acteurDao extends BaseDao {

    public function creeObj($fields) {
        $acteur = new acteur();
        $acteur->setId($fields['id']); 
        $acteur->setFirstName($fields['firstName']);
        $acteur->setLastName($fields['lastName']);
        return $acteur;
    }

    public function findAll() {
            $sql = "SELECT * FROM acteur" ;
            $stmt = $this->db->prepare($sql); 
            $result = $stmt->execute();
            if ($result) {
                $acteurs = [] ;
                while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                //    $acteurs[] =  $this->creeObj($row) ;  
                    array_push($acteurs,$this->creeObj($row));
                }
                return $acteurs;
            }
    }
}

?>