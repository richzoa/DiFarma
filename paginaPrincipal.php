<?php  
session_start();
$usuario= $_SESSION['username'];

if (!isset($usuario)) {
    location("location: login.php");
} else {
    echo "<h1>Bienvenido $usuario </h1>";
    
    echo "<a href='logica/salir.php'> SALIR</a> ";
}





?>