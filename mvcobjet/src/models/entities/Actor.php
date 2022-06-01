<?php 
namespace mvcobjet\Models\Entities; 

class actor {
    private $id ;
    private $firstName;
    private $lastName;

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id ;
        return $this; 
    }

    public function getFirstName(): string {
        return $this->firstName ;
    }

    public function setFirstName(string $firstName){
        $this->firstName =  $firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName(string $lastName){
        $this->lastName =  $lastName;
    }
}