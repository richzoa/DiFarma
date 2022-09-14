<?php 
//include la clase Db
require_once('C:\xampp\htdocs\difarma-master\inventarioDifarma\conexion.php');

	 class CrudProductos{
	 	//constructor de la clase
	 	function __construct(){}

	 	//metodo para insertar, recibe como parametro un objeto de tipo productos que es la misma tabla de MYSQL	
	 	public function insertar($productos){
	 		$db=Db::conectar();
	 		//Se hace el llamado del insert de sql para ingresar los datos en orden dependiendo como esten en la base de datos
	 		$insert=$db->prepare('INSERT INTO productos values(:codigop,:nombrep,:miligramosp,:laboratoriop,:cantidadp,:presentacionp,:mililitrosp,:fecha_vencimientop)');
	 		//Se comparan los campos de la tabla con los de la base de datos
	 		$insert->bindValue('codigop',$productos->getCodigop());
	 		$insert->bindValue('nombrep',$productos->getNombrep());
	 		$insert->bindValue('miligramosp',$productos->getMiligramosp());
	 		$insert->bindValue('laboratoriop',$productos->getLaboratoriop());
	 		$insert->bindValue('cantidadp',$productos->getCantidadp());
	 		$insert->bindValue('presentacionp',$productos->getPresentacionp());
	 		$insert->bindValue('mililitrosp',$productos->getMililitrosp());
	 		$insert->bindValue('fecha_vencimientop',$productos->getFecha_vencimientop());
	 		$insert->execute();
	 	}

	 	//metodo para mostrar todos los productos que se ejecuta en mostrar.php
	 	public function mostrar(){
	 		$db=Db::conectar();
	 		$listaProductos=[];
	 		//La consulta para traer todos los datos de la tabla productos
	 		$select=$db->query('SELECT * FROM productos');

	 		foreach ($select->fetchAll() as $productos) {
	 		$myProductos=new Productos();
	 		//Se comparan los campos de la tabla con los de la base de datos para mostrarlos	 		
	 		$myProductos->setCodigop($productos['codigop']); 
			$myProductos->setNombrep($productos['nombrep']);
			$myProductos->setMiligramosp($productos['miligramosp']);
			$myProductos->setLaboratoriop($productos['laboratoriop']); 
			$myProductos->setCantidadp($productos['cantidadp']);
			$myProductos->setPresentacionp($productos['presentacionp']); 
			$myProductos->setMililitrosp($productos['mililitrosp']);
			$myProductos->setFecha_vencimientop($productos['fecha_vencimientop']);
	 		$listaProductos[]=$myProductos;
	 	}
	 	return $listaProductos;
	 }
	 	//metodo para eliminar un producto, recibe como paramentro el codigo del producto

	 	public function eliminar($codigop){
	 		$db=Db::conectar();
	 		//Se hace la funcion delete dependiendo el codigop
	 		$eliminar=$db->prepare('DELETE FROM productos WHERE CODIGOP=:codigop');
	 		//Compara los campos del html y mysql
	 		$eliminar->bindValue('codigop',$codigop);
	 		$eliminar->execute();
	 	}

	 	// método para buscar un libro, recibe como parámetro el id del libro 
	 	public function obtenerProductos($codigop){ 
	 		$db=Db::conectar(); 
	 		//Se realiza la consulta de mostrar todos los productos dependiendo el codigo y que los traiga los atributos del dato mediante el fetch 
	 		$select=$db->prepare('SELECT * FROM productos WHERE CODIGOP=:codigop');
	 		$select->bindValue('codigop',$codigop); 
	 		$select->execute(); 
	 		$productos=$select->fetch(); 
	 		$myProductos=new Productos();
	 		//Se comparan los campos de la tabla con los de la base de datos para traerlos y poderlos actualizar si el usuario lo desea	 		
	 		$myProductos->setCodigop($productos['codigop']); 
			$myProductos->setNombrep($productos['nombrep']);
			$myProductos->setMiligramosp($productos['miligramosp']);
			$myProductos->setLaboratoriop($productos['laboratoriop']); 
			$myProductos->setCantidadp($productos['cantidadp']);
			$myProductos->setPresentacionp($productos['presentacionp']); 
			$myProductos->setMililitrosp($productos['mililitrosp']);
			$myProductos->setFecha_vencimientop($productos['fecha_vencimientop']);
	 		 
	 		return $myProductos; 
} 
// método para actualizar un producto, recibe como parámetro el productos como se llama la tabla en la base de datos 
public function actualizar($productos){ 
	$db=Db::conectar();
	//Se debe comparar los atributos de las tablas en html y los de sql para que no haya ambiguedad y se realiza la connsulta de actualizar y setear todos los datos del producto dependiendo su codigop 
	$actualizar=$db->prepare('UPDATE productos SET codigop=:codigop,nombrep=:nombrep,miligramosp=:miligramosp,laboratoriop=:laboratoriop,cantidadp=:cantidadp,presentacionp=:presentacionp,mililitrosp=:mililitrosp,fecha_vencimientop=:fecha_vencimientop WHERE CODIGOP=:codigop');
		 //Se comparan los campos de la tabla con los de la base de datos para actualizarlos	 		
	 		$actualizar->bindValue('codigop',$productos->getCodigop());
	 		$actualizar->bindValue('nombrep',$productos->getNombrep());
	 		$actualizar->bindValue('miligramosp',$productos->getMiligramosp());
	 		$actualizar->bindValue('laboratoriop',$productos->getLaboratoriop());
	 		$actualizar->bindValue('cantidadp',$productos->getCantidadp());
	 		$actualizar->bindValue('presentacionp',$productos->getPresentacionp());
	 		$actualizar->bindValue('mililitrosp',$productos->getMililitrosp());
	 		$actualizar->bindValue('fecha_vencimientop',$productos->getFecha_vencimientop());
	$actualizar->execute();

	}  
}

?>