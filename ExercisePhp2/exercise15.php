<?php
/*
// initialiser les variables
$prix_total = 0;
$somme_payee = 0;

// boucle pour lire les prix
do {
  $prix = intval(readline("Entrez un prix en euro (0 pour terminer) : "));
  $prix_total += $prix;
} while ($prix != 0);

// demander la somme payée
do {
  $somme_payee = intval(readline("Entrez la somme payée en euro : "));
} while ($somme_payee < $prix_total);

// calculer la monnaie à rendre
$monnaie = $somme_payee - $prix_total;
$reste = $monnaie;

// afficher la monnaie à rendre en coupures de 10 euros
if ($reste >= 10) {
  $nb_coupures = floor($reste / 10);
  echo "10 Euros : " . $nb_coupures . PHP_EOL;
  $reste -= $nb_coupures * 10;
}

// afficher la monnaie à rendre en coupures de 5 euros
if ($reste >= 5) {
  $nb_coupures = floor($reste / 5);
  echo "5 Euros : " . $nb_coupures . PHP_EOL;
  $reste -= $nb_coupures * 5;
}

// afficher la monnaie à rendre en pièces de 1 euro
if ($reste >= 1) {
  $nb_coupures = $reste;
  echo "1 Euro : " . $nb_coupures . PHP_EOL;
}
*/
?>

<?php
$user_type = 'customer';

switch ($user_type) {
  case 'student':
    echo "Welcome!";
    break;
    case 'press':
      echo "Greetings'";
      break;
      case 'customer':
        echo "Hello!";
?>