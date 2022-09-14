<?php 
//incluye la clase Productos y CrudProductos, hace la creacion y el llamado a las mismas
require_once('crud_pro.php');
require_once('producto.php');
$crud= new CrudProductos();
$productos= new Productos();
//obtiene todos los con el metodo mostrar de la clase crud
$listaProductos=$crud->mostrar();
?>

<html align="center">
<LINK REL=StyleSheet HREF="..\estilos\estilo.css" TYPE="text/css" MEDIA=screen>
<head>
	<title>Inventario</title>
</head>
<body class="H1">
	<br>
	<!--El metodo post permite un grado de criptografia de la informacion suministrada al sistema-->
	<table border="20" align="center">
		<head>
			<!--Los campos creados en la tabla de phpmyadmin, en foma de tabla y centrarlos, las casillas tipo text para visualizar los datos de cada campo-->
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Miligramos</td>
			<td>Laboratorio</td>
			<td>Cantidad</td>
			<td>Presentaciòn</td>
			<td>Mililitros</td>
			<td>Fecha vencimiento</td> 
			<td>Actualizar</td>
			<td>Eliminar</td>

		</head>
		<body class="H1">
			<!--Mediante la funcion foreach la lista la vuelve productos y trae los datos del registro dependiendo el codigo-->
			<?php foreach ($listaProductos as $productos) {?>
				<tr>
					<td><?php echo $productos->getCodigop() ?></td>
					<td><?php echo $productos->getNombrep() ?></td>
					<td><?php echo $productos->getMiligramosp() ?></td>
					<td><?php echo $productos->getLaboratoriop() ?></td>
					<td><?php echo $productos->getCantidadp() ?></td>
					<td><?php echo $productos->getPresentacionp() ?></td>
					<td><?php echo $productos->getMililitrosp() ?></td>
					<td><?php echo $productos->getFecha_vencimientop() ?></td>

					<!--Los dos botones que permiten actualizar y eliminar los registros mediante las acciones que ya se establecieron en administrar_pro.php-->

					<td><a href="actualizar.php?codigop=<?php echo $productos->getCodigop()?>&accion=a">Actualizar</a></td>
					
					<td><a href="administrar_pro.php?codigop=<?php echo $productos->getCodigop()?>&accion=e">Eliminar</a></td>	
				</tr>
			<?php }?>
		</body>
	</table>
	<br>
	<!--boton para devolver al index-->
	<a href="../../paginaPrincipal.php">Volver</a> 
</body>
</html>