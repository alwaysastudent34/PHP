<?php
class TriangleRectangle {
    private $longueur;
    private $largeur;
    private $hypotenuse;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->calculerHypotenuse();
    }

    public function afficherLongueur() {
        echo "La longueur est ".$this->longueur. "\n";
    }

    public function afficherLargeur() {
        echo "La largeur est ".$this->largeur."\n";
    }

    public function afficherHypotenuse() {
        echo "L'hypotenuse est ".$this->hypotenuse."\n";
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
        $this->calculerHypotenuse();
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
        $this->calculerHypotenuse();
    }

    private function calculerHypotenuse() {
        $this->hypotenuse = sqrt($this->longueur * $this->longueur + $this->largeur * $this->largeur);
    }
}

// Créer un triangle rectangle avec une longueur de 6 et une largeur de 8
$triangle = new TriangleRectangle(6, 8);

// Afficher les valeurs des attributs
$triangle->afficherLongueur();
$triangle->afficherLargeur();
$triangle->afficherHypotenuse();

// Modifier la longueur et la largeur et vérifier que l'hypoténuse a bien été recalculée
$triangle->setLongueur(3);
$triangle->setLargeur(4);

// Afficher les nouvelles valeurs des attributs
$triangle->afficherLongueur();
$triangle->afficherLargeur();
$triangle->afficherHypotenuse();

?>