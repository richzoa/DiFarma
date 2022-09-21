<?php 
//incluye la clase Productos y CrudProductos, hace la creacion y el llamado a las mismas
require_once('crudProducto.php');
require_once('producto.php');
$crud= new CrudProductos();
$productos= new Productos();
//obtiene todos los con el metodo mostrar de la clase crud
$listaProductos=$crud->mostrar();
?>

<html>
<head>
	<center>
</head>
	<link rel="stylesheet" href="../styleProductos.css">
	<link rel="stylesheet" href="../styleOthers.css">
<body>
	<br>
	<!--El metodo post permite un grado de criptografia de la informacion suministrada al sistema-->
	<section class="section-first">
			<div class="curtain-data bg-gradient-reverse"></div>
			<div class="img-container2 img-container-one"></div>
        	<div class="grid">
			<div class="text-container-center2">
			<div class="wrapper wrapper-first">
			<h1>Productos</h1>
			</div>
			<h1>Productos</h1>
			</div>
			</div>
			<div class="text-container">
			<div class="wrapper wrapper-first">
		<table class="table-fill">
		<thead>
			<tr>
				</div>
				<th class="table-left">Codigo</th>
				<th class="table-left">Nombre</th>
				<th class="table-left">Miligramos</th>
				<th class="table-left">Laboratorio</th>
				<th class="table-left">Cantidad</th>
				<th class="table-left">Presentacion</th>
				<th class="table-left">Mililitros</th>
				<th class="table-left">Fecha vencimiento</th>
				<th class="table-left">Actualizar</th>
				<th class="table-left">Eliminar</th>
			</tr>
		</thead>

		<tbody class="table-hover">
			<!--Mediante la funcion foreach la lista la vuelve productos y trae los datos del registro dependiendo el codigo-->
			<?php foreach ($listaProductos as $productos) {?>
				<tr><center>
					<td class="table-left"><?php echo $productos->getCodigop() ?></td>
					<td class="table-left"><?php echo $productos->getNombrep() ?></td>
					<td class="table-left"><?php echo $productos->getMiligramosp() ?></td>
					<td class="table-left"><?php echo $productos->getLaboratoriop() ?></td>
					<td class="table-left"><?php echo $productos->getCantidadp() ?></td>
					<td class="table-left"><?php echo $productos->getPresentacionp() ?></td>
					<td class="table-left"><?php echo $productos->getMililitrosp() ?></td>
					<td class="table-left"><?php echo $productos->getFecha_vencimientop() ?></td>

					<!--Los dos botones que permiten actualizar y eliminar los registros mediante las acciones que ya se establecieron en administrar_pro.php-->
					<td><a href="actualizarProducto.php?codigop=<?php echo $productos->getCodigop()?>&accion=a">Actualizar</a></td>
					<td><a href="administrarProducto.php?codigop=<?php echo $productos->getCodigop()?>&accion=e">Eliminar</a></td>	
				</tr>
			<?php }?>
		</tbody>
	</table>	
</section>
	<br>
	<!--boton para devolver al index-->
	<form action="../index.php" method="POST">
		<button href='../index.php' class="btn-basic">Volver</button>
	</form>
</body>
</html>