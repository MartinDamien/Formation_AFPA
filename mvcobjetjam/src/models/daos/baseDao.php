<?php
//DAO : Data Access Object
namespace MVC\models\daos;

use PDO;

class BaseDao{
    protected $db;

    public function __construct(){
        $this->db = new PDO('mysql://host=localhost;dbname=cinema;charset=utf8', 'root', '');
    }
}