<?php
// Demander les scores des quatre candidats
$candidat1 = readline("Score du candidat 1 : ");
$candidat2 = readline("Score du candidat 2 : ");
$candidat3 = readline("Score du candidat 3 : ");
$candidat4 = readline("Score du candidat 4 : ");

$total_votes = $candidat1 + $candidat2 + $candidat3 + $candidat4;

// Calculer le pourcentage de votes pour le candidat 1
$pct_candidat1 = $candidat1 / $total_votes * 100;

// Vérifier si le candidat 1 est élu dès le premier tour
if ($pct_candidat1 > 50) {
    echo "Le candidat 1 est élu dès le premier tour.";
} else {
    // Vérifier si le candidat 1 peut participer au second tour
    if ($pct_candidat1 >= 12.5) {
        // Trouver le deuxième candidat avec le plus de votes
        $votes_second_candidat = max($candidat2, $candidat3, $candidat4);
        $pct_second_candidat = $votes_second_candidat / $total_votes * 100;
        
        // Vérifier si le candidat 1 est en ballottage favorable
        if ($pct_candidat1 > $pct_second_candidat) {
            echo "Le candidat 1 est en ballottage favorable.";
        } else {
            echo "Le candidat 1 est en ballottage défavorable.";
        }
    } else {
        echo "Le candidat 1 est battu.";
    }
}
?>