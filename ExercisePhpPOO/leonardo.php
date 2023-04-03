<?php

class Peintre {
    private $nom;
    
    public function __construct($nom) {
        $this->nom = $nom;
    }
    
    public function peindre($couleurs) {
        $manquant = array();
        foreach ($couleurs as $couleur) {
            if (!Couleur::estPresente($couleur)) {
                $manquant[] = $couleur;
            }
        }
        if (count($manquant) > 0) {
            echo "Va faire les courses, la Joconde ne se fera pas sans: " . implode(", ", $manquant) . "\n";
        } else {
            echo "Magnifique peinture, dommage qu'il vous reste encore vos 2 oreilles\n";
        }
    }
}

class Couleur {
    private static $couleurs = array("rouge", "bleu", "jaune", "vert", "orange", "violet");
    
    public static function estPresente($couleur) {
        return in_array($couleur, self::$couleurs);
    }
}

$leonard = new Peintre("Leonard de Vinci");

$couleurs = array();
for ($i = 1; $i <= 3; $i++) {
    echo "Entrez une couleur: ";
    $couleur = trim(fgets(STDIN));
    $couleurs[] = $couleur;
}

$leonard->peindre($couleurs);

?>
