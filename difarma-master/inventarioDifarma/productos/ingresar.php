<!DOCTYPE html>
<html align="center">
<LINK REL=StyleSheet HREF="..\estilos\estilo.css" TYPE="text/css" MEDIA=screen>
<head>
	<title>Ingresar producto</title>
</head>
	<header>
		Ingresar producto
	</header>
	<br>
	<body class="H1">
	<!--El metodo post permite un grado de criptografia de la informacion suministrada al sistema-->
	<form action="administrar_pro.php" method="post">
		<!--Los campos creados en la tabla de phpmyadmin, en foma de tabla y centrarlos, las casillas tipo text para insertar datos a los campos-->
		<table align="center">
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
				<td>Presentaciòn</td>
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
		</table>
		<br>
		<!--Se incluyen dos botones para volver y guardar los datos ingresados-->

		<input type="submit" name="Guardar">

		<a href="..\index.php">Volver</a> 


	</form>


</body>
</html>