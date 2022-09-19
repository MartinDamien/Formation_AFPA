<?php
$s = "hello";
$f = function () use ($s) {
    echo $s;
};
// dans $f je mets le texte de la fonction en enfermant la variable $s) 


$f();
