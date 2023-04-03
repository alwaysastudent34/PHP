<?php
$nombre = 0;
while ($nombre < 1 ||  $nombre > 10) {
    echo "Veuillez saisir un nombre entre 1 et 10 : ";
    $nombre = trim(fgets(STDIN));
     // On utilise trim() pour supprimer les espaces et fgets() pour lire l'entrée utilisateur depuis la console.
    // On stocke la valeur dans la variable $nombre.
    echo "Le nombre saisi est :" . $nombre;
}

?>