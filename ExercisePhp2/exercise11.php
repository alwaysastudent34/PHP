<?php
// Demande a l'utilisateur d'entrer un nombre de depart
echo "Entrez un nombre de depart : ";
$nombre = intval(fgets(STDIN));

// Calcule la somme des entiers jusqu'a ce nombre
$somme = 0;
for ($i = 1; $i <= $nombre; $i++) {
    $somme += $i;
}

// Affiche le résultat de la somme
echo "La somme des entiers jusqu'a " . $nombre . " est : " . $somme . "\n";
?>