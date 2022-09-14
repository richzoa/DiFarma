<?php 
//incluye la clase Productos y CrudProductos, hace la creacion y el llamado a las mismas 
require_once('crud_pro.php'); 
require_once('producto.php');
	$crud= new CrudProductos(); 
	$productos=new Productos(); 
	//busca el producto utilizando el codigop, que es enviado por GET desde la vista mostrar.php 
	$productos=$crud->obtenerProductos($_GET['codigop']); 
?>

<html align="center">
<LINK REL=StyleSheet HREF="..\estilos\estilo.css" >
<head>
	<title>Actualizar Producto</title>
</head>
<br>
<body class="H1">
	<!--Se trae mediante un form las funciones y clases que se almacenen en administrar_pro.php y el metodo post para encriptar informacion-->
	<form action="administrar_pro.php" method="post">
		<table align="center">
<!--Se trae cada campo y mediante una caja de text ya este almacenada la informacion por la funcion php ObtenerProductos que se encuentra en administrar_pro.php y asi poder modificarlos-->
		<tr>
			<td>Codigo</td>
			<td><input type="text" name="codigop" value="<?php echo $productos->getCodigop()?>"></td><br>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombrep" value="<?php echo $productos->getNombrep()?>"></td><br>
		</tr>
		<tr>
			<td>Miligramos</td>
			<td><input type="text" name="miligramosp" value="<?php echo $productos->getMiligramosp()?>"></td><br>
		</tr>
		<tr>
			<td>Laboratorio</td>
			<td><input type="text" name="laboratoriop" value="<?php echo $productos->getLaboratoriop()?>"></td><br>
		</tr>
		<tr>
			<td>Cantidad</td>
			<td><input type="text" name="cantidadp" value="<?php echo $productos->getCantidadp()?>"></td><br>
		</tr>
		<tr>
			<td>Presentaciòn</td>
			<td><input type="text" name="presentacionp" value="<?php echo $productos->getPresentacionp()?>"></td><br>
		</tr>
		<tr>
			<td>Mililitros</td>
			<td><input type="text" name="mililitrosp" value="<?php echo $productos->getMililitrosp()?>"></td><br>
		</tr>
		<tr>
			<td>Fecha vencimiento</td> 
			<td><input type="text" name="fecha_vencimientop" value="<?php echo $productos->getFecha_vencimientop()?>"></td><br>
		</tr>
<!--Tipo hidden es un tipo invisible pero que se tiene presente para actualizar la informacion cuando el usuario presione el input submit-->
			
			<input type="hidden" name="actualizar" value="actualizar">
		</table>
		<br>
		<input type="submit" name="Guardar">
		<a href="..\index.php">Volver</a>
	</form>
</body>
</html>