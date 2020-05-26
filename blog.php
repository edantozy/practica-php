<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<title>Bienvenido al blog <?php echo $_SESSION['usuario']; ?> </title>
</head>
<body>
 	<?php echo "Tu contraseña es: ".$_SESSION['contrasenia']; ?>
 	<a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>