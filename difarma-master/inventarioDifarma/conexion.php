<?php 
//Se crea una clase que almacene la conexion a la base de datos
 class Db{
//Si existe algun error la siguiente funcion manda una alerta
 		private static $conexion=NULL;
		private function __construct(){} 

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			//Se establece la conexion a la base de datos dependiendo el puerto y la base de datos y el perfil que se maneje,ademas, una contraseña si se le establecio alguna
			self::$conexion=new PDO('mysql:host=localhost;dbname=difarma','root','123456',$pdo_options);
			//retorna la verificacion de conexion a la base de datos
			return self::$conexion;
		}
		}
 ?>