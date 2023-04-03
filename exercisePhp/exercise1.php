<!DOCTYPE html>
<html>
<body>

<?php

  $heure= readline();
  $minute= readline();


  if( $minute==59){
    if($heure==23){
      $heure=0;
    }else{
    $heure++;
  }
    $minute=0;
  } else{
    $minute++;
  }
 

  echo 'Dans une minute, il sera '.$heure.'h'.$minute;
  
?>





</body>
</html>
