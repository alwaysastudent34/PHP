<?php
$choix = array('patate','souris','casserole','cuillere','ordinateur','');
$solution = $choix[array_rand($choix)];
$tentative = 8;
$affichage = "";
$lettres_trouvees = "";

for ($i = 0; $i < strlen($solution); $i++) {
    $affichage .= "_";
}

echo ">>Bienvenue dans le pendu<<\n";

while ($tentative > 0) {
    echo "\nMot à deviner: $affichage\n";
    $proposition = strtolower(readline("proposez une lettre : ")[0]);

    if (strpos($solution, $proposition) !== false) {
        $lettres_trouvees .= $proposition;
        echo "-> Bien vu !\n";
    } else {
        $tentative--;
        echo "-> Nope\n";
        if ($tentative == 7) {
            echo "==========Y=\n";
        } elseif ($tentative == 6) {
            echo "==========Y=\n/       |\n";
        } elseif ($tentative == 5) {
            echo "==========Y=\n/       |\n        0\n";
        } elseif ($tentative == 4) {
            echo "==========Y=\n/       |\n        0\n       /|\\\n";
        } elseif ($tentative == 3) {
            echo "==========Y=\n/       |\n        0\n       /|\\\n        |\n";
        } elseif ($tentative == 2) {
            echo "==========Y=\n/       |\n        0\n       /|\\\n        |\n       / \n";
        } elseif ($tentative == 1) {
            echo "==========Y=\n/       |\n        0\n       /|\\\n        |\n       / \\\n";
        } elseif ($tentative == 0) {
            echo "==========Y=\n/       |\n        0\n       /|\\\n        |\n       / \\\n||\n=============\n";
            echo "Désolé mais c'est perdu,░░░░▄▄▄▄▀▀▀▀▀▀▀▀▄▄▄▄▄▄
            ░░░░█░░░░▒▒▒▒▒▒▒▒▒▒▒▒░░▀▀▄
            ░░░█░░░▒▒▒▒▒▒░░░░░░░░▒▒▒░░█
            ░░█░░░░░░▄██▀▄▄░░░░░▄▄▄░░░█
            ░▀▒▄▄▄▒░█▀▀▀▀▄▄█░░░██▄▄█░░░█
            █▒█▒▄░▀▄▄▄▀░░░░░░░░█░░░▒▒▒▒▒█
            █▒█░█▀▄▄░░░░░█▀░░░░▀▄░░▄▀▀▀▄▒█
            ░█▀▄░█▄░█▀▄▄░▀░▀▀░▄▄▀░░░░█░░█
            ░░█░░▀▄▀█▄▄░█▀▀▀▄▄▄▄▀▀█▀██░█
            ░░░█░░██░░▀█▄▄▄█▄▄█▄████░█
            ░░░░█░░░▀▀▄░█░░░█░███████░█
            ░░░░░▀▄░░░▀▀▄▄▄█▄█▄█▄█▄▀░░█
            ░░░░░░░▀▄▄░▒▒▒▒░░░░░░░░░░█
            ░░░░░░░░░░▀▀▄▄░▒▒▒▒▒▒▒▒▒▒░█
            ░░░░░░░░░░░░░░▀▄▄▄▄▄░░░░░█le mot à trouver était : $solution ++\n";
        }
    }

    $affichage = "";
    for ($i = 0; $i < strlen($solution); $i++) {
        if (strpos($lettres_trouvees, $solution[$i]) !== false) {
            $affichage .= $solution[$i];
        } else {
            $affichage .= "_";
        }
    }

    if (strpos($affichage, "_") === false) {
        echo ">>> Gagné ! ░░░░░░░░░░░░░░░░░░░░░░█████████░░░░░░░░░
        ░░███████░░░░░░░░░░███▒▒▒▒▒▒▒▒███░░░░░░░
        ░░█▒▒▒▒▒▒█░░░░░░░███▒▒▒▒▒▒▒▒▒▒▒▒▒███░░░░
        ░░░█▒▒▒▒▒▒█░░░░██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██░░
        ░░░░█▒▒▒▒▒█░░░██▒▒▒▒▒██▒▒▒▒▒▒██▒▒▒▒▒███░
        ░░░░░█▒▒▒█░░░█▒▒▒▒▒▒████▒▒▒▒████▒▒▒▒▒▒██
        ░░░█████████████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██
        ░░░█▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▒▒██
        ░██▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒██▒▒▒▒▒▒▒▒▒▒██▒▒▒▒██
        ██▒▒▒███████████▒▒▒▒▒██▒▒▒▒▒▒▒▒██▒▒▒▒▒██
        █▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒████████▒▒▒▒▒▒▒██
        ██▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██░
        ░█▒▒▒███████████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██░░░
        ░██▒▒▒▒▒▒▒▒▒▒████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒█░░░░░
        ░░████████████░░░█████████████████░░░░░░ <<<\nLe mot était bien $solution\n";
        break;
    }
}

echo "\nFin de la partie";
?>
