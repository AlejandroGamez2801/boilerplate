<?php
// error_reporting(0);
error_reporting(~E_DEPRECATED);
class Conexion {
	private static $instance = null;
	private $db = null;
	
	public function __construct () {
		$config = Config::singleton();
		$conexion = mysql_connect('localhost','root', '');

		mysql_query("set names utf8");

		if(!$conexion){
			echo "Error conectando a la base de datos.";
			exit();
		}

		if(!mysql_select_db('boilerplate', $conexion)){
			echo "Error seleccionando la base de datos.";
			exit();
		}

		$this->db = $conexion;
	}
	
	public static function singleton (){
		if(self::$instance == null){
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function getConnection (){
		return $this->db;
	}
}
?>