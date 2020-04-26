<?php
class IndexController{
	public function __construct(){

	}

	public function index () {
		$Usuario = new UsuariosModel();
		$usuarios = $Usuario->all();

		$data['usuarios'] = $usuarios;
		$fragmentoUsuarios = new View('usuarios.php');
		$renderFragmentoUsuarios = $fragmentoUsuarios->output($data);

		$view = new View('index.php');
		$view->set('fragmentoUsuarios', $renderFragmentoUsuarios);
		echo $view->output();		
	}
}
?>