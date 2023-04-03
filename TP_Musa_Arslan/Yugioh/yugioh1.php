<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// Vérifier si tous les champs sont remplis
	if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['type'])) {

		// Récupérer les données du formulaire
		$nom = $_POST['nom'];
		$description = $_POST['description'];
		$type = $_POST['type'];

		// Vérifier si la description n'est pas vide
		if (strlen(trim($description)) > 0) {

			// Vérifier si la carte existe déjà
			$cartes = array(
				array("nom" => "Dragon blanc aux yeux bleus", "description" => "Un dragon puissant avec des yeux bleus étincelants", "type" => "monstre"),
				array("nom" => "Changeur de carte", "description" => "Une carte qui permet de changer de carte pendant le duel", "type" => "magie"),
				array("nom" => "Force de miroir", "description" => "Un piège qui renvoie l'attaque de l'adversaire", "type" => "piège")
			);

			$carte_existe = false;
			foreach ($cartes as $carte) {
				if ($carte['nom'] == $nom) {
					$carte_existe = true;
					echo "La carte existe déjà: <br>";
					echo "Nom: " . $carte['nom'] . "<br>";
					echo "Description: " . $carte['description'] . "<br>";
					echo "Type: " . $carte['type'] . "<br>";
					break;
				}
			}

			// Si la carte n'existe pas, ajouter la carte à la liste
			if (!$carte_existe) {
				$nouvelle_carte = array("nom" => $nom, "description" => $description, "type" => $type);
				array_push($cartes, $nouvelle_carte);
				echo "La carte a été ajoutée avec succès!";
			}

		} else {
			echo "La description de la carte ne peut pas être vide";
		}

	} else {
		echo "Tous les champs doivent être remplis";
	}

}
?>
