<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>La pair de chaussette</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h1>Infos</h1>
	<?php
	foreach ($chaussettes as array() as $socks) {
		?>
		<div>Réf : <?php echo $socks->id ?></div>
		<div>Couleur : <?php echo $socks->couleur ?></div>
		<div>Pointure :  <?php echo $socks->pointure?></div>
		<div>Description : <?php echo $socks->description ?></div>
		<div>Température de lavage : <?php echo $socks->temp_lavage?> °C</div>
		<div>Date du dernier lavage : <?php echo $socks->date_lavage?></div>
		<?php	
		
	}
	?>
	<a href="index_Armoire.php">Retour à la liste</a>
</body>
</html>

