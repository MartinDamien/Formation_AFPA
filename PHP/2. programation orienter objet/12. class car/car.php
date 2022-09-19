<?php
    class car
    {
        private $modele;
        private $couleur;
        private $annee;
        private $energie;
        private $kilometrage;

        public function getmodele()
        {
            return $this->modele;
        }
        public function setmodele($modele)
        {
            $this->modele = $modele;
        }

        public function getcouleur()
        {
            return $this->couleur;
        }
        public function setcouleur($g)
        {
            $this->couleur = $g;
        }
        public function getannee()
        {
            return $this->annee;
        }

        public function setannee($annee)
        {
            $this->annee = $annee;
        }

        public function getenergie()
        {
            return $this->energie;
        }
        public function setenergie($g)
        {
            $this->energie = $g;
        }

        public function getkilometrage()
        {
            return $this->kilometrage;
        }

        public function setkilometrage($kilometrage)
        {
            $this->kilometrage = $kilometrage;
        }
    };

    // $c1 = new car();
    // $c1->setmodele("Audi");
    // $c1->setcouleur("rouge");
    // $c1->setannee("2010");
    // $c1->setenergie("diesel");
    // $c1->setkilometrage("100000");

    // echo "<pre>";
    // print_r($c1);
    // echo "</pre>";
