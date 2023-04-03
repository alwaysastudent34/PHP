<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
  </head>
  <body>
    <h1>Contactez-nous</h1>
    <form action="traitement.php" method="post">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required><br><br>
      <label for="email">Adresse email :</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="message">Message :</label>
      <textarea id="message" name="message" required></textarea><br><br>
      <input type="submit" value="Envoyer">
    </form>
  </body>
</html>
