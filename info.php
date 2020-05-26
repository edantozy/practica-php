<?php
$user = "edantozy";
$password = "12345";


if($_POST['usuario'] == $user && $_POST['contrasenia'] == $password){
	session_start();
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['contrasenia'] = $_POST['contrasenia'];
	header('location: blog.php');
} else {
	echo "Su nombre de usuario y/o contraseña es incorrecto.\n";
	echo $_POST['usuario'];
	echo $_POST['contrasenia'];

}

?>