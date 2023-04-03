<?php

function character (){

$b = rand(1,6);
switch ($b) {
    case 1:
        $characterPkm = ("joyeux");
        break;
    case 2:
        $characterPkm = ("flemmard");
        break;
    case 3:
        $characterPkm = ("genereux");
        break;
    case 4:
        $characterPkm = ("envieux");
        break;
    case 5:
        $characterPkm = ("depressif");
        break;
    
    default:
        $characterPkm = ("normal");
        break;
}

return $characterPkm;
}





class Starter
{
public $nom;
public $type;
public $charactere;

/*

Construct

*/

public function __construct($nom,$type,$charactere){
    $this->nom = $nom;
    $this->type=  $type;
    $this->charactere = $charactere;
}

/*

Getter

*/

public function getnom()
{
    return $this->Nom;
}
public function gettype()
{
    return $this->type;
}
public function getcharactere()
{
    return $this->charactere;
}

/*

Affichage

*/
public function getpkm()
{
    $text = "Le pokemon est $this->nom de type $this->type et de charactere $this->charactere \n";
    return $text;
}
/*

Setter

*/
public function setnom($nom)
{
$this->nom=$nom;
}
public function settype($type)
{
$this->type=$type;
}
public function setcharactere($charactere)
{
$this->charactere=$charactere;
}
}

/*

Starter

*/

$Pikachu = new Starter("Pikachu", "Electrique",character());
$Carapuce = new Starter("Carapuce", "Eau",character());
$Salameche = new Starter("Salameche", "Feu",character());


/*

Sortie

*/

echo $Pikachu ->getpkm();
if ($Pikachu->getcharactere() == "genereux") {
    echo "Ma batterie portable est enfin pleine !\n";
}
echo $Carapuce ->getpkm();
if ($Carapuce->getcharactere() == "joyeux") {
    echo "Ecnore une fuite...\n";
}
echo $Salameche ->getpkm();
if ($Salameche->getcharactere() == "flemmard") {
    echo "LA MAISON BRULE !!\n";
}

?>