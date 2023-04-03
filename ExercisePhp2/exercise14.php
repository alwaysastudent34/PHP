<?php
// Déclaration des variables 
$plusGrand = PHP_INT_MIN; // initialisation a la plus petite valeur possible un entier
$positiponPlusGrand = 0;
$i = 0;

// Demande a l'utilisateur de saisir des nombes jusqu'a ce qu'il entre un zéro
do {
    $i++;
    echo "Entrez le nombre numéro " . $i . " : ";
    $nombre = intval(fgets(STDIN));

    // Vérifie si le nombre entré est plus grand que le plus grand nombre trouvé jusqu'a présent
    if ($nombre > $plusGrand) {
        $plusGrand = $nombre;
        $positionPlusGrand = $i;

    } while ($nombre != 0);
}
// Affiche le résultat 
echo "Le plus grand de ces nombres est : " . $plusGrand . " a la position numéro " . $positionPlusGrand . "\n";

?>