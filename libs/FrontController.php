<?php

require('libs/View.php');
require('libs/Config.php');
require('libs/Conexion.php');
require('libs/Model.php');

/** Mis modeloes */
require 'models/UsuariosModel.php';

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
		
		$controllerName = $controller.'Controller';
		$pathController = "controllers/$controllerName.php";
		
		require $pathController;
		$controller = new $controllerName;
		$controller->$action();

	}
}
?>