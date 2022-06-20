<?php
class utilisateur
    {
        public $userinfo;
        private $nom;
        private $prenom;
        private $password;
        private $user_level;

        public function __construct($nom, $prenom, $password)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->password = $password;
        }

        
       /* public function setNom($nom){
            $this->nom = $nom;
        }
        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getPassword(){
            return $this->password;
        }

        public function debug($n, $p, $pass)
        {
            echo "<pre>";
            print_r($n, $p, $pass);
            echo "</pre>";
        }*/

        
    }