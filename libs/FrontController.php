<?php
class FrontController{
	public static function main(){
		$controller = $_GET['controller'];
		$action = $_GET['action'];
		
		if(!$controller){/** En caso de que no venga el controlador*/
			$controller='index';
		}
		if(!$action){/** En caso de que no venga la accion*/
			$action='index';
		}
		echo "Invocando la accion $action del controlador $controller";
	}
}
?>