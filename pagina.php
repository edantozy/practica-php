<?php 
//Para pasar una variable de un archivo a otro, se necesita crear una sesión.
//echo 'Name: '.session_name().'<br>'.' ID: '.session_id();

//Se crean las variables de sesión.
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method='POST' action="info.php">
		Nombre de usuario: <input type="text" name="usuario"><br>
		Contraseña: <input type="password" name="contrasenia">
		<input type="submit" value="Ingresar" name="enviar">
	</form>
</body>
</html>

<?php
/*
DEPRECATED
$nombre = 'John Cena';
session_register('nombre');
DEPRECATED
*/

//session_destroy(); Destruye todos los datos asociados a la sesión.
 ?>