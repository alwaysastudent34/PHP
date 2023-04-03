<?php
/*
$donnees = [
    ['nom' => 'John', 'age' => 30],
    ['nom' => 'Jane', 'age' => 25],
    ['nom' => 'Bob' , 'age' => 35],
];

echo '<table>';
echo '<tr>';
echo '<th>Nom</th>';
echo '<th>Age</th>';
echo '</tr>';

foreach ($donnees as $ligne) {
    echo '<tr>';
    echo '<td>'. $ligne['nom']. '</td>';
    echo '<td>'. $ligne['age']. '</td>';
    echo '</tr>';
}

echo '</table>';
*/
?>

<?php

$expression = '/^[0-9]{10}$/';
$numeroTelephone = '0123456789';

if (preg_match($expression, $numeroTelephone)) {
    echo "Le numero telephone est valide.";
} else {
    echo "Le numero telephone n'est pas valide.";
}

?>
