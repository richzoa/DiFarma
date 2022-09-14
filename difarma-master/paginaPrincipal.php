<?php  
session_start();
$usuario= $_SESSION['username'];

if (!isset($usuario)) {
    location("location: login.php");
} else {
        echo "<h1>Bienvenido $usuario </h1>";
        if ($usuario== "admin") {
        echo "<a href='inventarioDifarma/index.php'> agregar o ver inventario</a>";
        echo "<br><br/><a href='logica/salir.php'> SALIR</a> ";
        } else { 
          if ($usuario== "bodega") {
          echo "<a href='inventarioDifarma/index.php'> agregar o ver inventario</a>";
          echo "<br><br/><a href='logica/salir.php'> SALIR</a> ";
          }else {
            if ($usuario== "farmaceuta") {
                echo "<a href='inventarioDifarma/productos/mostrarFarmaceuta.php'> ver inventario</a>";
                echo "<br><br/><a href='logica/salir.php'> SALIR</a> ";
          }
        }


        }
    }

?>