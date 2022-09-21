<?php 
//incluye la clase Productos y CrudProductos, hace la creacion y el llamado a las mismas 
require_once('crudProducto.php'); 
require_once('producto.php');

$crud= new CrudProductos(); 
$productos= new Productos(); 

	// si el elemento insertar no viene nulo llama al crud e inserta un producto 
	if (isset($_POST['insertar'])) { 
		$productos->setCodigop($_POST['codigop']); 
		$productos->setNombrep($_POST['nombrep']);
		$productos->setMiligramosp($_POST['miligramosp']);
		$productos->setLaboratoriop($_POST['laboratoriop']); 
		$productos->setCantidadp($_POST['cantidadp']);
		$productos->setPresentacionp($_POST['presentacionp']); 
		$productos->setMililitrosp($_POST['mililitrosp']);
		$productos->setFecha_vencimientop($_POST['fecha_vencimientop']);
	//llama a la función insertar definida en el crud 
		$crud->insertar($productos); 
		header('Location: ..\index.php');  
		// si el elemento de la vista con codigop actualizar no viene nulo, llama al crud y actualiza el producto 
	}elseif(isset($_POST['actualizar'])){ 
		$productos->setCodigop($_POST['codigop']); 
		$productos->setNombrep($_POST['nombrep']);
		$productos->setMiligramosp($_POST['miligramosp']);
		$productos->setLaboratoriop($_POST['laboratoriop']); 
		$productos->setCantidadp($_POST['cantidadp']);
		$productos->setPresentacionp($_POST['presentacionp']); 
		$productos->setMililitrosp($_POST['mililitrosp']);
		$productos->setFecha_vencimientop($_POST['fecha_vencimientop']);
		$crud->actualizar($productos); 
		header('Location: ..\index.php'); 
		// si la variable accion enviada por GET es -- 'e' llama al crud y elimina un producto 
	}elseif ($_GET['accion']=='e') { 
		$crud->eliminar($_GET['codigop']); 
		header('Location: ..\index.php'); 
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){ 
		heoder('Location: actualizarProducto.php');
	} 
?> 