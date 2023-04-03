<?php
// Déclaration des variables
$plusGrand = PHP_INT_MIN; // initialisation à la plus petite valeur possible pour un entier
$positionPlusGrand = 0;

// Demande à l'utilisateur d'entrer 20 nombres
for ($i = 1; $i <= 20; $i++) {
    echo "Entrez le nombre numéro " . $i . " : ";
    $nombre = intval(fgets(STDIN));

    // Vérifie si le nombre entré est plus grand que le plus grand nombre trouvé jusqu'à présent
    if ($nombre > $plusGrand) {
        $plusGrand = $nombre;
        $positionPlusGrand = $i;
    }
}

// Affiche le résultat
echo "Le plus grand de ces nombres est : " . $plusGrand . " à la position numéro " . $positionPlusGrand . "\n";
?>
