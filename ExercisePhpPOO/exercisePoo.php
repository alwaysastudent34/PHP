<?php
class Registre {
    private $nom;
    private $prenom;
    private $age;
    private $sexe;
    private $departement;
    private $adresse;

    public function __construct($nom, $prenom, $age, $sexe, $departement, $adresse) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->departement = $departement;
        $this->adresse = $adresse;
    }

    public function afficherInfos() {
        echo "La personne " . $this->nom . " " . $this->prenom . " âgée de " . $this->age . " ans est de sexe " . $this->sexe . " et est née dans le département " . $this->departement . " et habite à l'adresse " . $this->adresse . ".";
    }

    public function modifierAdresse($nouvelleAdresse) {
        $this->adresse = $nouvelleAdresse;
    }
}
$personne1 = new Registre("Dubois", "Leo", 33, "homme", "Paris", "15 rue du Faubourg Saint-Honoré");
$personne2 = new Registre("Duront", "Delphine", 25, "femme", "Lyon", "7 avenue des Gobelins");

$personne1->afficherInfos(); // Affiche "La personne Leo Dubois âgée de 35 ans est de sexe homme et est née dans le département Paris et habite à l'adresse 15 rue du Faubourg Saint-Honoré."
$personne2->afficherInfos(); // Affiche "La personne Delphine duront âgée de 28 ans est de sexe femme et est née dans le département Lyon et habite à l'adresse 7 avenue des Gobelins."

$personne1->modifierAdresse("25 rue de la Paix");
$personne1->afficherInfos(); // Affiche "La personne Leo Dubois âgée de 35 ans est de sexe homme et est née dans le département Paris et habite à l'adresse 25 rue de la Paix."


?>


<?php
class fruit {
    public $name;
    function set_name($name) {
        $this->name = $name;
    }
}
?>