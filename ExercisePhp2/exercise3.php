<?php
$copie=(int)readline("Entrer le nombre de copie");

if($copie<=10){
    $total=$copie*0.1;
}
elseif($copie>=10 && $copie<=30){
    $total=(10*0.1)+(($copie-10)*0.09);
}
else{
    $total=(10*0.1)+(20*0.09)+(($copie-30)*0.08);
}
echo $total ."euros."
?>