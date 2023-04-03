<?php
    // Initialisation des tarifs
    $tarifs = array(
        "rouge" => 0,
        "orange" => 1,
        "vert" => 2,
        "bleu" => 3
    );

    // Saisie des informations sur le conducteur
    $age = readline("Quel est votre âge ? ");
    $annees_permis = readline("Depuis combien d'années avez-vous le permis ? ");
    $accidents = readline("Combien d'accidents responsables avez-vous eu ? ");

    // Calcul du tarif en fonction de la situation du conducteur
    if ($age < 25 && $annees_permis < 2) {
        if ($accidents == 0) {
            $tarif = $tarifs["rouge"];
        } else {
            $tarif = -1; // refusé
        }
    } else if (($age < 25 && $annees_permis >= 2) || ($age >= 25 && $annees_permis < 2)) {
        if ($accidents == 0) {
            $tarif = $tarifs["orange"];
        } else if ($accidents == 1) {
            $tarif = $tarifs["rouge"];
        } else {
            $tarif = -1; // refusé
        }
    } else { // $age >= 25 && $annees_permis >= 2
        if ($accidents == 0) {
            $tarif = $tarifs["vert"];
        } else if ($accidents == 1) {
            $tarif = $tarifs["orange"];
        } else if ($accidents == 2) {
            $tarif = $tarifs["rouge"];
        } else {
            $tarif = -1; // refusé
        }
    }

    // Vérification de la fidélité du client
    $couleur_contrat = "";
    $annees_contrat = readline("Depuis combien d'années êtes-vous client ? ");
    if ($annees_contrat >= 5) {
        if ($tarif == $tarifs["vert"]) {
            $couleur_contrat = "bleu";
        } else if ($tarif == $tarifs["orange"]) {
            $couleur_contrat = "vert";
        } else if ($tarif == $tarifs["rouge"]) {
            $couleur_contrat = "orange";
        }
    }

    // Affichage du tarif et du contrat proposé (si applicable)
    if ($tarif == -1) {
        echo "Nous sommes désolés, nous ne pouvons pas vous assurer pour le moment.";
    } else {
        echo "Le tarif proposé est : " . array_search($tarif, $tarifs) . "\n";
        if (!empty($couleur_contrat)) {
            echo "En tant que client fidèle, nous vous proposons de passer au tarif " . $couleur_contrat . ".";
        }
    }
?>
