<?php
class IndexController{
	public function __construct(){

	}

	public function index(){
		// $view = new View('index.php');
		
		// echo $view->output();
		$usuarios = new UsuariosModel();
		echo json_encode($usuarios->all());
	}
}
?>