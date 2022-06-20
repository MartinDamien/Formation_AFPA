
<?php

function additionner100($a, $b)
{
    // cette fonction permet l'addition de 2 numeriques ayant la valeur 10 maximum
    // tester si les 2 arguments nombres sont numerique
    if (!is_numeric($a) or !is_numeric($b)) {
        // si a ou b n'est pas numerique, on leve une exeption
        throw new Exception("les 2 argument doivent etre numériques");
    } else if (($a > 100) or ($b > 100)); {
        // si a ou b > 10, je leve une exeption
        throw new Exception("a et b doivent etre inferieur à 11");
    } 
    return $a + $b;
}

try {
    // essaye de faire ce qui suit
    echo additionner100(10, 10) . "<br>";
    echo additionner100("Azerty", 1) . "<br>";
} catch (Exception $e) {
    // si une exeption est levée, c'est a dire qu'il y a eu l'execution de throw Exception
    echo "une erreur c'est Produite, " . $e->getMessage() . "<br>";
}
