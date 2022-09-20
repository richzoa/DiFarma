
<?php
$mysqli = new mysqli("localhost","root","123456","difarma");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


/*
$host = "localhost";
$usuario = "root";
$clave = "123456";
$bd = "difarma"

$conexion = new mysqli($host,$usuario,$clave,$bd);

if ($conexion) {
	echo "conectado correctamente";
} else {
	echo "conectado incorrecto";
}
 class Db{

	private static $conexion = NULL;

		private function __construct(){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			self::$conexion = new PDO('mysql:host=localhost; dbname=difarma' , 'root', '123456',$pdo_options);
			return self::$conexion;
		}


}
*/
?>