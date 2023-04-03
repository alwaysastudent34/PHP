<?php

// Définition des constantes
const LARGEUR_PLATEAU = 7;
const HAUTEUR_PLATEAU = 6;
const JOUEUR_1 = 'rouge';
const JOUEUR_2 = 'jaune';

// Initialisation du plateau de jeu
$plateau = array();
for ($i = 0; $i < LARGEUR_PLATEAU; $i++) {
    $plateau[$i] = array();
    for ($j = 0; $j < HAUTEUR_PLATEAU; $j++) {
        $plateau[$i][$j] = 'vide';
    }
}

// Fonction pour afficher le plateau de jeu
function afficherPlateau($plateau) {
    for ($j = HAUTEUR_PLATEAU - 1; $j >= 0; $j--) {
        for ($i = 0; $i < LARGEUR_PLATEAU; $i++) {
            if ($plateau[$i][$j] == 'vide') {
                echo '.';
            } else if ($plateau[$i][$j] == JOUEUR_1) {
                echo 'O';
            } else if ($plateau[$i][$j] == JOUEUR_2) {
                echo 'X';
            }
            echo ' ';
        }
        echo "\n";
    }
    for ($i = 0; $i < LARGEUR_PLATEAU; $i++) {
        echo $i + 1 . ' ';
    }
    echo "\n";
}

// Fonction pour vérifier si un joueur a gagné la partie
function verifierGagne($plateau, $joueur) {
    // Vérifier les alignements horizontaux
    for ($j = 0; $j < HAUTEUR_PLATEAU; $j++) {
        for ($i = 0; $i < LARGEUR_PLATEAU - 3; $i++) {
            if ($plateau[$i][$j] == $joueur && $plateau[$i+1][$j] == $joueur && $plateau[$i+2][$j] == $joueur && $plateau[$i+3][$j] == $joueur) {
                return true;
            }
        }
    }
    // Vérifier les alignements verticaux
    for ($j = 0; $j < HAUTEUR_PLATEAU - 3; $j++) {
        for ($i = 0; $i < LARGEUR_PLATEAU; $i++) {
            if ($plateau[$i][$j] == $joueur && $plateau[$i][$j+1] == $joueur && $plateau[$i][$j+2] == $joueur && $plateau[$i][$j+3] == $joueur) {
                return true;
            }
        }
    }
    // Vérifier les alignements diagonaux ascendantes
    for ($j = 0; $j < HAUTEUR_PLATEAU - 3; $j++) {
        for ($i = 0; $i < LARGEUR_PLATEAU - 3; $i++) {
            if ($plateau[$i][$j] == $j

            function checkWinner($board, $player) {
                // Vérifie les alignements horizontaux
                for ($row = 0; $row < 6; $row++) {
                  for ($col = 0; $col < 4; $col++) {
                    if ($board[$row][$col] == $player &&
                        $board[$row][$col+1] == $player &&
                        $board[$row][$col+2] == $player &&
                        $board[$row][$col+3] == $player) {
                      return true;
                    }
                  }
                }
              
                // Vérifie les alignements verticaux
                for ($row = 0; $row < 3; $row++) {
                  for ($col = 0; $col < 7; $col++) {
                    if ($board[$row][$col] == $player &&
                        $board[$row+1][$col] == $player &&
                        $board[$row+2][$col] == $player &&
                        $board[$row+3][$col] == $player) {
                      return true;
                    }
                  }
                }
              
                // Vérifie les alignements diagonaux (descendants)
                for ($row = 0; $row < 3; $row++) {
                  for ($col = 0; $col < 4; $col++) {
                    if ($board[$row][$col] == $player &&
                        $board[$row+1][$col+1] == $player &&
                        $board[$row+2][$col+2] == $player &&
                        $board[$row+3][$col+3] == $player) {
                      return true;
                    }
                  }
                }
              
                // Vérifie les alignements diagonaux (ascendants)
                for ($row = 3; $row < 6; $row++) {
                  for ($col = 0; $col < 4; $col++) {
                    if ($board[$row][$col] == $player &&
                        $board[$row-1][$col+1] == $player &&
                        $board[$row-2][$col+2] == $player &&
                        $board[$row-3][$col+3] == $player) {
                      return true;
                    }
                  }
                }
              
                return false;
              }
?>                      