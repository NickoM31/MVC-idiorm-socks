<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mes Chaussetes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h1>Le roi de la chaussette</h1>
	<table class="ui inverted orange table">
		<th>id</th>
		<th>description</th>
		<th>pointure</th>
		<th>couleur</th>
		<th>temp_lavage</th>
		<th>date lavage</th>
		<th>Action</th>
		<?php 
		
		foreach ($chaussettes as $socks) {
			?>
			<tr>
				
				<td>
					<a href= "detail.php?id=<?php echo $socks->id;?>"><?= $socks->id;?></a>
				</td>
				<td><?php echo $socks->description;?></td>
				<td><?php echo $socks->pointure;?></td>
				<td><?php echo $socks->couleur;?></td>
				<td><?php echo $socks->temp_lavage;?>°C</td>
				<td><?php echo $socks->date_lavage;?></td>
				<td><a href="edit.php">Edit</a></td>
			</tr>
			<?php
		}
		?>
	</table>


	
</body>
</html>