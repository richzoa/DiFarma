<?php 

session_start();
$usuario= $_SESSION['username'];

if (!isset($usuario)) {
    location("location: login.php");
} else {
        if ($usuario== "admin") {
        header("location: inventarioDifarma/index.php");
        } else { 
          if ($usuario== "bodega") {
          header("location: inventarioDifarma/index.php");
          }else {
            if ($usuario== "farmaceuta") {
            header("location: inventarioDifarma/indexFarmaceuta.php");
          }
        }
     }
  }
?>

