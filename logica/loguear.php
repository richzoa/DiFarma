<?php  
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
$consulta = mysqli_query($mysqli,$q);
$array = mysqli_fetch_array($consulta);
if ($array['contar']>0) {
	$_SESSION['username'] = $usuario;
	header("location: ../paginaPrincipal.php");
} else {
	echo "DATOS INCORRECTOS";
}


?>