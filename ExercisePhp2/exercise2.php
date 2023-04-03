<?php


// Demander à l'utilisateur d'entrer l'heure, les minutes et les secondes
$heure = intval(readline("Entrez l'heure : "));
$minutes = intval(readline("Entrez les minutes : "));
$secondes = intval(readline("Entrez les secondes : "));

// Ajouter une seconde à l'heure
if ($secondes < 59) {
    $secondes++;
} else {
    $secondes = 0;
    if ($minutes < 59) {
        $minutes++;
    } else {
        $minutes = 0;
        if ($heure < 23) {
            $heure++;
        } else {
            $heure = 0;
        }
    }
}

// Afficher l'heure, les minutes et les secondes modifiées
echo "Dans une seconde, il sera ".str_pad($heure, 2, "0", STR_PAD_LEFT)."h".str_pad($minutes, 2, "0", STR_PAD_LEFT)." et ".str_pad($secondes, 2, "0", STR_PAD_LEFT)." secondes.";
?>
