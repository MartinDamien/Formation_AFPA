<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class car{
    private $modele;
    private $couleur;
    private $annee;
    private $energie;

    public function getmodele() {
        return $this->modele ;
    }
    public function setmodele($modele) {
        $this->modele = $modele ;
    }
    public function getcouleur() {
        return $this->couleur ;
    }
    public function setcouleur($g) {
      
        $this->couleur = $g ;
    }
    public function getannee() {
        return $this->annee ;
    }
    public function setannee($annee) {
        $this->annee = $annee ;
    }
    public function getenergie() {
        return $this->energie ;
    }
    public function setenergie($g) {
      
        $this->energie = $g ;
    }
};
$c1 = new car();
$c1->setmodele('panto');
$c1->setcouleur('bleu');
$c1->setannee('2008');
$c1->setenergie('diesel');

echo "<pre>";
print_r($c1);
echo "</pre>";
?>
</body>
</html>