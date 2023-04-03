<?php
$nombre = 0;

while ($nombre < 10 || $nombre > 20) {
    echo "Entrez un nombre compris entre 10 et 20 : ";
    $nombre = trim(fgets(STDIN));

    if ($nombre < 10) {
        echo "Plus grand !\n";
    } elseif ($nombre > 20) {
        echo "Plus petit !\n";
    }
}

echo "Le nombre choisi est : " . $nombre;
?>
