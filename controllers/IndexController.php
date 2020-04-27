<?php
class IndexController{
	public function __construct(){

	}

	public function index () {
		$view = new View('index.php');
		echo $view->output();		
	}
}
?>