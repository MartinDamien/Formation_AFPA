<?php

namespace alloCine\models;

use PDO;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql://host=localhost;dbname=cinema;charset=utf8", 'root', '');
    }

    public function getAll(){
        $query = $this->db->query('SELECT * FROM movies');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne(){
        $query = $this->db->query('SELECT * FROM movies WHERE id = ?');
        $query->execute([$_GET['id']]);
    }
}