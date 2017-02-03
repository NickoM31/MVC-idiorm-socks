<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edition</title>
</head>
<body>
<h1>Modification</h1>
	<form action="/?action=edit" method="post">

		<input type="hidden" name="id" value="<?= $socks->id ?>">

		<label for="description">Description</label>
		<input type="text" name="description" id="description">
		<label for="couleur">Couleur</label>
		<input type="text" name="couleur" id="couleur">
		<label for="pointure">Pointure</label>
		<input type="text" name="pointure" id="pointure">
		<label for="temp_lavage">Temp de lavage</label>
		<input type="text" name="temp_lavage" id="temp_lavage">

		<button>Modifier</button>
	</form>
</body>
</html>