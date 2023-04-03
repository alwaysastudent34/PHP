<?php
// Demander à l'utilisateur son âge et son sexe
$age = readline("Quel est votre âge ? ");
$sexe = readline("Êtes-vous un homme (H) ou une femme (F) ? ");

// Vérifier si l'utilisateur est imposable
if (($sexe == "H" && $age > 20) || ($sexe == "F" && $age >= 18 && $age <= 35)) {
    echo "Vous êtes imposable.";
} else {
    echo "Vous n'êtes pas imposable.";
}
?>
