<?php
class Personnage {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}

class Objet {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}

class NinNinNin extends Objet {
    public function __construct($name) {
        parent::__construct($name);
    }
}

class Pistolet extends Objet {
    public function __construct() {
        parent::__construct("Pistolet");
    }
}

class MeeseeksBox extends Objet {
    public function __construct() {
        parent::__construct("MeeseeksBox");
    }
}

class SzechuanSauce extends Objet {
    public function __construct() {
        parent::__construct("SzechuanSauce");
    }
}

class PortalGun extends NinNinNin {
    public function __construct() {
        parent::__construct("PortalGun");
    }
    
    public function __toString() {
        if ($this->name == "P03tAlGuN") {
            return "PortalGun(P03tAlGuN)";
        } elseif ($this->name == "MortyJR") {
            return "PortalGun(MortyJR)";
        } else {
            return $this->name;
        }
    }
}

$rick = new Personnage("Rick");
$morty = new Personnage("Morty");
$jerry = new Personnage("Jerry");

$pistolet = new Pistolet();
$meeseeksBox = new MeeseeksBox();
$szechuanSauce = new SzechuanSauce();
$portalGun = new PortalGun();

$selected_character = readline("Sélectionnez un personnage (Rick, Morty ou Jerry) : ");
$selected_obj1 = readline("Sélectionnez un premier objet (Pistolet, MeeseeksBox ou SzechuanSauce) : ");
$selected_obj2 = readline("Sélectionnez un deuxième objet (Pistolet, MeeseeksBox ou SzechuanSauce) : ");

if ($selected_character == "Rick" && $selected_obj1 == "Pistolet" && $selected_obj2 == "SzechuanSauce") {
    echo "Ça y est j’ai révolutionné l’univers\n";
    $portalGun->name = "P03tAlGuN";
} elseif ($selected_character == "Morty" && $selected_obj1 == "SzechuanSauce" && $selected_obj2 == "MeeseeksBox") {
    echo "Encore un nouveau gosse de l’espace\n";
    $portalGun->name = "MortyJR";
} elseif ($selected_character == "Jerry") {
    $selected_obj1 = $selected_obj2 = "Jerry";
} else {
    echo "Failed\n";
}

echo "Personnage sélectionné : ".$selected_character."\n";
echo "Objet 1 sélectionné : ".$selected_obj1."\n";
echo "Objet 2 sélectionné : ".$selected_obj2."\n";
echo "PortalGun : ".$portalGun."\n";
?>