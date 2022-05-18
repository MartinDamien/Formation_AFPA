<?php
$s = "Hello";
$f = function () use($s) {
    echo $s;
};
// dans $f je met le texte de la fonction en enfermant la variable $s

$f();
