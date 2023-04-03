<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Traitement du formulaire de Contact</title>
  </head>
  <body>
    <?php
      $nom = $_POST['nom'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      
      echo "<p>Nom : $nom</p>";
      echo "<p>Adresse email : $email</p>";
      echo "<p>Message : $message</p>";
    ?>
  </body>
</html>
