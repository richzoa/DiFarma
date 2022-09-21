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
	<link rel="stylesheet" href="../styleInventario.css">
<body>
	<br>
	<!--El metodo post permite un grado de criptografia de la informacion suministrada al sistema-->
	<section class="section-first">
		<div class="curtain bg-gradient2"></div>
			<div class="img-container2 img-container-one"></div>
        	<div class="grid">
			<div class="text-container">
			<div class="wrapper wrapper-first">
			<h1>Productos</h1>
			</div>
			<h1>Productos</h1>
			</div>
			</div>
			<div class="text-container">
			<div class="wrapper wrapper-first">
			<link rel="stylesheet" href="styleOp.css">
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
				</tr>
			<?php }?>
		</tbody>
	</table>	
</section>
	<br>
	<!--boton para devolver al index-->
	<form action="../indexFarmaceuta.php" method="POST">
		<button href='../indexFarmaceuta.php' class="btn-basic">Volver</button>
	</form>
	
</body>
</html>