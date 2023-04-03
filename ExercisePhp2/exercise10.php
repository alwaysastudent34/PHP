<?php
// Demande a l'utilisateur d'entrer un nombre de depart
echo "Entrez un nombre de depart : ";
$nombre = intval(fgets(STDIN));

// Ecrit la table de multiplication de ce nombre
for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " x " . $i ." = " .($nombre * $i) . "\n";
}
?>