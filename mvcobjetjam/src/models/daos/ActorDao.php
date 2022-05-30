<?php 
namespace mvcobjet\models\daos;
use mvcobjet\models\Entities\Actor;

class ActorDao extends BaseDao {

    public function creeObj($fields) {
        $acteur = new Actor();
        $acteur->setId($fields['id']); 
        $acteur->setFirstName($fields['firstName']);
        $acteur->setLastName($fields['lastName']);
        return $acteur;
    }

    public function findAll() {
            $sql = "SELECT * FROM actor" ;
            $stmt = $this->db->prepare($sql); 
            $result = $stmt->execute();
            if ($result) {
                $actors = [] ;
                while ($row =  $stmt->fetch(\PDO::FETCH_ASSOC)) {
                //    $actors[] =  $this->creeObj($row) ;  
                    array_push($actors,$this->creeObj($row));
                }
                return $actors;
            }
    }
}

?>