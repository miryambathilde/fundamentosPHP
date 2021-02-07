<?php
$array = array ('Miryam Bathilde', 'Sergio Tomas de Sousa', 'Oliver Crevillen'); //array de lista de tutores
//FOREACH
foreach ($array as $valor) { //indicamos que queremos que recorra el array y que almacene cada uno de los valores	
	echo "<b>Tutor: </b> $valor<br />\n"; //asi es como se hace un salto de linea en php: <br />\n
}

//ARRAY ASOCIATIVO DE DIRECTORIO EMPRESAS
$array2 = array ('Golden Nature'=> 'Motilla Nova 58', 'Pixelpro'=> 'Calle Oro 20', 'Miryam Bathilde'=> 'Arco Norte 30');
foreach ($array2 as $clave => $valor){
	echo "<b>$clave: </b> $valor<br />\n"; //clave es el nombre de la empresa, y el valor la dirección
}
?>
