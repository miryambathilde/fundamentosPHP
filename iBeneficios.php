<?php
$nombre = "by Miryam"; //nombre para el copyright
$titulo = "iBeneficios"; //titulo de la pagina
$moneda = "€"; //variable de la moneda
//datos de facturacion
$facturacion = array ('Enero'=> 1000, 'Febrero'=> 200, 'Marzo'=> 345, 'Abril'=> 1260, 'Mayo'=> 4000);
$gastos = array ('Enero'=> 300, 'Febrero'=> 300, 'Marzo'=> 345, 'Abril'=> 60, 'Mayo'=> 70);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $titulo ?> </title>
    <meta name= "description" content=""/>
    <meta name= "author" content="Miryam"/>
    
    <style>
		body {
			background-color: #FFFFF0;
		}
		
		h1 {
			color: #F08080;
			text-align: center;
			font-family: "Trebuchet MS";
		}
		
		h2 {
			color: #778899;
			font-family: "Trebuchet MS";
		}
		
		p {
			font-family: "Trebuchet MS";
			font-size: 14px;
			color: #778899;
		}
		
		.beneficio {
			font-family: "Trebuchet MS";
			font-size: 14px;
			color: green;
		}
		
		.perdidas {
			font-family: "Trebuchet MS";
			font-size: 14px;
			color: red;
		}
	</style>
</head>

<body>
		<div>
			<header>
				<h1> <?php echo $titulo ?> </h1>
			</header>
		</div>
		<div>
			<h2>Entradas</h2><p>
			<?php
			$resultado = 0; //creamos una variable resultado, que en principio es igual a 0
			foreach ($facturacion as $clave => $valor) { //suma de entradas, facturacion
				echo "<b>$clave:</b> $valor $moneda <br />\n";
				$resultado = $resultado + $valor;
			}
			?>
			<h2>Gastos</h2><p>
			<?php
			$resultadoGastos = 0; //creamos una variable resultadoGastos, que en principio es igual a 0
			foreach ($gastos as $claveG => $valorG) { //suma de entradas, facturacion
				echo "<b>$claveG :</b> $valorG $moneda <br/>\n";
				$resultadoGastos = $resultadoGastos + $valorG;
			}
			$beneficio = $resultado - $resultadoGastos;
			//echo con los resultados
			echo "
			<br/>
			<b>Total Facturación:</b> $resultado $moneda"; //Total facturación
			echo "
			<br/>
			<b>Total Gastos:</b> $resultadoGastos $moneda"; //Total gastos
			$beneficio = 0; //añadimos esto para que de perdidas y salga en rojo
			//IF PARA TOTAL BENEFICIOS
			if ($beneficio > 0){ //si hay beneficios mayor a 0 le paso la clase beneficio
				echo "
			<br/>
			<b>Total Beneficio:</b><span class='beneficio'> $beneficio $moneda</span>";
			} else { //si no hay beneficios mayor a 0 le paso la clase perdidas
				echo "
			<br/>
			<b>Total Beneficio:</b><span class='perdidas'> $beneficio $moneda</span>";
			}
			?>	
			</p>
		</div>
    <footer>
    	<p>
    		&copy; Copyright <?php echo $nombre; ?>
    	</p>
    </footer>
</body>
</html>