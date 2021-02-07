<?php
//base de datos
$usuario = "Miryam";
$password = "1234";



?>
<?php
$nombre = $_GET['nombre'];
$pass= $_GET['pass'];

//ELSE IF
if ($usuario != $nombre){ //si el nombre de usuario no es igual al nombre que introduce el usuario
	echo "El nombre de usuario está mal";
}else if ($password != $pass){ //si el password no es igual al password que introduce el usuario en la app
	echo "El password es incorrecto";
}else{
	echo "Bienvenido a bordo"; //si coincide tanto el nombre de usuario como el password 
}
?>