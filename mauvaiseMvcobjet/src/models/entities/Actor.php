<?php
namespace mvcobjet\models\entities;

class Actor{
    private $id;
    private $first_name;
    private $last_name;

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getFirst_name():string{
        return $this->first_name;
    }

    public function setFirst_name(string $first_name){
        $this->first_name = $first_name;
    }

    public function getLast_name(): string{
        return $this->last_name;
    }

    public function setLast_name(string $last_name){
        $this->last_name = $last_name;
    }
}

