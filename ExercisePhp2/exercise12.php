<?php
// Demande a l'utilisateur d'entrer un nombre de depart
echo "Entrez un nombre de depart : ";
$nombre = intval(fgets(STDIN));

// Calcule la factorielle  de ce nombre
$factorielle = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $factorielle *= $i;
}

// Affiche le résultat de la factorielle 
echo "La factorielle de " . $nombre . " est ". $factorielle. "\n";
?>