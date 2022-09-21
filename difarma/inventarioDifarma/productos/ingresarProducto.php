<!DOCTYPE html>
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
			<h1>Ingresar Producto</h1>
			</div>
			</div>
		<!--Los campos creados en la tabla de phpmyadmin, en foma de tabla y centrarlos, las casillas tipo text para insertar datos a los campos-->	
	 <section class="section-third-reverse">
	 <form action="administrarProducto.php" method="post">
		<table>
			<thead>
			<tr>
				<td>Codigo</td>
				<td><input type="text" name="codigop"></td><br>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombrep"></td><br>
			</tr>
			<tr>
				<td>Miligramos</td>
				<td><input type="text" name="miligramosp"></td><br>
			</tr>
			<tr>
				<td>Laboratorio</td>
				<td><input type="text" name="laboratoriop"></td><br>
			</tr>
			<tr>
				<td>Cantidad</td>
				<td><input type="text" name="cantidadp"></td><br>
			</tr>
			<tr>
				<td>Presentacion</td>
				<td><input type="text" name="presentacionp"></td><br>
			</tr>
			<tr>
				<td>Mililitros</td>
				<td><input type="text" name="mililitrosp"></td><br>
			</tr>
			<tr>
				<td>Fecha vencimiento</td>
				<td><input type="date" name="fecha_vencimientop"></td><br>
			</tr>
			<input type="hidden" name="insertar" value="insertar">
			</thead>
		</table>
		</div>
		</div>
		<br></br>
		<!--Se incluyen dos botones para volver y guardar los datos ingresados-->
		<input class="btn-basic" type="submit" name="guardar" value="Guardar">
		<button href='../index.php' class="btn-basic">Volver</button>
	</form>
</body>
</html>