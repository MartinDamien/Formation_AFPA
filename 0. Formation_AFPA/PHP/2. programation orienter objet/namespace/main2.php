<!-- ESPACE DE NOMS ( ou namespaces )
Tout code qui suit une déclaration d'espace de noms fonctionne à l'intérieur de
l'espace de noms. Pour accéder aux classes à partir de l'extérieur d'un espace de
noms, la classe doit avoir l'espace de noms attaché à elle.
Cela évite de faire appel à des classes, des fonctions ou des variables qui
pourraient avoir le même nom dans votre application Web.
Les grosses applications ou les frameworks importent beaucoup de classes dont
les noms peuvent entrer en conflit, d’où la nécessaire utilisation de namespaces.
Les espaces de noms sont déclarés avec le mot-clé namespace
exemple:
namespace App\Dossier\Sousdossier
Les espaces de noms sont toujours sur la 1ere ligne
1 espace de noms par fichier .php
L’espace de noms peut-être retrouvé via la constante php __NAMESPACE__
Soit le fichier HTML suivant Html.php: -->
<?php

namespace Html;

class Table
{
    // attributs
    public $title = "";
    public $numRows = 0;
    // méthodes
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows}
rows.</p>";
    }
}

class Row
{
    public $numCells = 0;
    public function message()
    {
        echo "<p>The row has {$this->numCells} cells.</p>";
    }
}
?>
<!-- L’exécution du script suivant donnera -->
<?php
require_once "Html.php";
$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;
$row = new Html\Row();
$row->numCells = 3;
?>
<html>

<body>
    <?php $table->message(); ?>
    <?php $row->message(); ?>
</body>

</html>
<!-- Donnera:
Table 'My table' has 5 rows.
The row has 3 cells.-->

<!-- On peut aussi donner un alias à l’espace de noms
Ex: -->
use Html as H;
$table = new H\Table();
use Html;
$table = new Table();
<!-- Autre exemple 
Soit index.php-->
<?php
require "src/Car/CarIntro.php";
$cari = new openlab\Car\CarIntro();
echo $cari->sayHello();
?>
ou aussi
<?php
require "src/Car/CarIntro.php";

use openlab\Car\CarIntro; // use comme les traits
$cari = new CarIntro();
echo $cari->sayHello();
?>
ou aussi
<?php
require "src/Car/CarIntro.php";

use openlab\Car\CarIntro as carbure;

$cari = new Carbure();
echo $cari->sayHello();
?>
<!-- ET soit dans le sous répertoire src/Car/CarIntro.php -->
<?php

namespace openlab\Car;

class CarIntro
{
    public function sayHello()
    {
        return "beep!";
    }
}
?>