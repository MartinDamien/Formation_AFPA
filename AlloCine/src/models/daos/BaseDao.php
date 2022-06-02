<?php 
// DAO : Data Access Object. 
namespace mvcobjet\models\daos;

use PDO;

abstract class BaseDao {
    protected $db ;

    public function __construct(){
        $this->db = new PDO("mysql://host=localhost;dbname=cinema;charset=utf8", 'root' , '');
    }
}

?>