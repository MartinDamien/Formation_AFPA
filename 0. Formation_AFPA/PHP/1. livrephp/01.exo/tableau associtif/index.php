<?php 
// ici je vais inclure le fonctionnement PHP 
// qui mettra à disposition les fonctions qui sont dans ce PHP
require_once("fonctions.php"); 

// Je vais créer un tableau de tableaux
$employes = [
    [   
        "name"=>"Polo",
        "adresse"=>"Paris",
        "email"=>"polo@gmail.com"
    ],
    [  
       "name"=>"Emile",
       "adresse"=>"Brest",
       "email"=>"emil@gmail.com"
    ],
    [  
       "name"=>"John",
       "adresse"=>"Montreuil",
       "email"=>"jon@gmail.com"
    ]
];

//debug($employes);
/* Affiche ainsi , sans la balise <pre> tout serait sur une seule ligne. 
Array
(
    [0] => Array
        (
            [name] => Polo
            [adresse] => Paris
            [email] => polo@gmail.com
        )

    [1] => Array
        (
            [name] => Emile
            [adresse] => Brest
            [email] => emil@gmail.com
        )

    [2] => Array
        (
            [name] => Jhon
            [adresse] => Montreuil
            [email] => jon@gmail.com
        )

)

*/
// debug($employes[0]);
/*
donnera
Array
(
    [name] => Polo
    [adresse] => Paris
    [email] => polo@gmail.com
)
*/
// Comment je m'affiche ici le name the employes[0] 

// debug($employes[0]["name"]); 

foreach($employes as $key => $values) { ?>
        <h1>employé</h1>

  <?php      
    foreach($values as $keys => $val) {
            debug($val);
            // afficher l'employé en html autre que <pre> 

        }
  ?>
  <hr>
<?php } ?>