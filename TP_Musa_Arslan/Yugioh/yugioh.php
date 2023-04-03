<!DOCTYPE html>
<html>
<head>
	<title>Ajouter une carte Yu-Gi-Oh!</title>
</head>
<body>
	<h1>Ajouter une carte Yu-Gi-Oh!</h1>
	<form action="yugioh1.php" method="POST">
		<label>Nom de la carte:</label>
		<input type="text" name="nom" required><br><br>
		
		<label>Description:</label>
		<textarea name="description" required></textarea><br><br>

		<label>Type de carte:</label>
		<select name="type">
			<option value="monstre">Monstre</option>
			<option value="magie">Magie</option>
			<option value="piège">Piège</option>
		</select><br><br>

		<input type="submit" value="Ajouter la carte">
	</form>
</body>
</html>
