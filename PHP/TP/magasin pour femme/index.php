<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header{
            display: flex;
            justify-content: space-evenly;
            background-color:aliceblue;
        }
        header h1{
            margin: auto;
        }
        nav{
            margin: auto 0 auto 0;
            height: fit-content;
            width: 400px;
            display: inline;
        }
        li{
            list-style: none;
            width: 100px;
        }
        body{
            background-color:beige;
            
        }
        #collection{
            display: flex;
            flex-flow: column nowrap;
            padding: 20px;
        }
        img{
            width: 200px;
            height: 400px;
            object-fit: cover;
            
        }
        .card{
            
            width: 30%;
            height: 400px;
            background-color: white;
            border: black solid;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            flex-flow: column wrap;
        }
        .card p{
            font-size: 50px;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>TITRE</h1>
        <nav>
            <ul>
                <li>acceuil</li>
                <li>truc</li>
                <li>femmes</li>
                <li>hommes</li>
            </ul>
        </nav>
    </header>
    
    <?php

    $Femmes = [
        ["nom_produit" => "robe classe" , "prix"=> 5 , "photo" => "robec.png"],
        ["nom_produit" => "pantalon femme" , "prix"=> 45 , "photo" => "pantalonf.png"],
        ["nom_produit" => "t-shirt femme" , "prix" => 99.99 , "photo" => "tshirt.png"]
    ];

    
    ?>
<div id="collection">
    <?php 
    //  faire le code php qui affiche le catalogue femmes
    function template($tableau){
        foreach ($tableau as $produit) {
            echo '<div class="card"><img src="img/'
            .$produit["photo"].'" class="img" ><h2> '
            .$produit["nom_produit"].'</h2><p><strong>'
            .$produit["prix"].'€</strong></p></div>';
        }
    }

template($Femmes)






// $femmes N'est pas un tableau d'objet mais est un tableau de tableaux
/*  Vous essayer de créer la même page mais uniquement PHP 
    En PHP on ne met pas à jour un élément précis puisque le PHP regenere toute une page HTML côté serveur 
    on peut pas aller modifier un élément précis 


    Vous allez modifier ce programme pour l'écrire en PHP c'est-à-dire que cette page va afficher une liste de produits 
    pour les femmes
    Ensuite vous faites un autre programme PHP en partant du Catalogue qu'on avait dans le programme précédent où il y avait
    les femmes hommes et les enfants
    Ici on voit que le la variable femme était un tableau d'objets on peut pas le faire comme ça en PHP 
    donc il faut qu'on fasse un tableau de tableau avec un système clé valeur.
*/
    ?>
</div>
</body>
</html>