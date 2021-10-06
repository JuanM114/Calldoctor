<?php 
	class Db{
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=localhost; dbname=call', 'root','',$pdo_options);
			return self::$conexion;
		}
	}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "call";

//crear conexion con BD
$conex = mysqli_connect($servername, $username, $password, $dbname);

// verificar conexion con la BD
if (!$conex) {
    die ("conexion fallida: " . mysqli_connect_error());
}
?>

