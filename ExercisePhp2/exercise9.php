<?php
/*
// Demande a  l'utilisateur d'entrer un nombre de depart
echo "Entrez un nombre de depart : ";
$nombre = intval(fgets(STDIN));

// Affiche le nombre de depart
for ($i =1; $i <= 10; $i++) {
    echo ($nombre + $i) . "\n";
}
*/
?>

<?php
$nbr= readline();

for($i=0; $i<10;$i++) {
    $nbr++;
    echo $nbr. "\n";
}
?>