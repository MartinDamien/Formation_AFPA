<?php 
// DAO : Data Access Object. 
namespace AlloCine\models\daos;

use PDO;

abstract class Model {
    protected $db ;

    public function __construct(){
        $this->db = new PDO("mysql://host=localhost;dbname=cinema;charset=utf8", 'root' , '');
    }
}

?>