<?php 
//incluye la clase Productos y CrudProductos, hace la creacion y el llamado a las mismas 
require_once('crudProducto.php'); 
require_once('producto.php');
	$crud= new CrudProductos(); 
	$productos=new Productos(); 
	//busca el producto utilizando el codigop, que es enviado por GET desde la vista mostrar.php 
	$productos=$crud->obtenerProductos($_GET['codigop']); 
?>

<html>
<head>
	<center>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styleProductos.css">
	<link rel="stylesheet" href="../styleOthers.css">
</head>
<body>
	<!--El metodo post permite un grado de criptografia de la informacion suministrada al sistema-->
	<section>
		<div class="curtain-short bg-gradient"></div>
			<br></br>
			<br></br>
			<br></br>
				<div class="wrapper wrapper-first">
				<div class="text-container-center">
			<h1>Actualizar Producto</h1>
			</div>
			</div>
		<!--Los campos creados en la tabla de phpmyadmin, en foma de tabla y centrarlos, las casillas tipo text para insertar datos a los campos-->	
	 <section class="section-third-reverse">
	 <form action="administrarProducto.php" method="post">
		<table>
			<thead>
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
				<td>Presentacion</td>
				<td><input type="text" name="presentacionp" value="<?php echo $productos->getPresentacionp()?>"></td><br>
			</tr>
			<tr>
				<td>Mililitros</td>
				<td><input type="text" name="mililitrosp" value="<?php echo $productos->getMililitrosp()?>"></td><br>
			</tr>
			<tr>
				<td>Fecha vencimiento</td>
				<td><input type="date" name="fecha_vencimientop" value="<?php echo $productos->getFecha_vencimientop()?>"></td><br>
			</tr>
			<input type="hidden" name="insertar" value="insertar">
			</thead>
		</table>
		</div>
		</div>
		<br></br>
		<input class="btn-basic" type="submit" name="actualizar" value="Actualizar">
		<button href='../index.php' class="btn-basic">Volver</button>
	</form>
</body>
</html>