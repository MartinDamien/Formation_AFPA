<?php

function division($dividende, $diviseur)
{
    if ($diviseur == 0) {
        throw new Exception("Division par zero interdite !");
    }
    return $dividende / $diviseur;
}


try {
    echo division(24, 3);
} catch (Exception $e) {
    echo "erreur ! " . $e->getMessage();
}
