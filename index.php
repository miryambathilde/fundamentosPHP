<?php
$nombre = "by Miryam"; //nombre para el copyright
$titulo = "Acceso Usuarios"; //titulo de la pagina
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $titulo ?> </title>
</head>
 
<body>
	<div>
		<header>
			<h1> <?php echo $titulo ?> </h1>
		</header>
	</div>
	<div>
		<form name="input" action="acceso.php" method="get">
			Nombre:
			<input type= "text" name = "nombre">
			<br>
			Password:
			<input type= "password" name = "pass">
			<input type= "submit" name = "Enviar">
		</form>
	</div>
    <footer>
    	<p>
    		&copy; Copyright <?php echo $nombre; ?>
    	</p>
    </footer>
</body>
</html>