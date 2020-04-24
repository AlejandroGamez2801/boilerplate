<?php
class View{
	/** @var string*/
	protected $pathView;
	public function __construct($viewName){
		$this->pathView="views/$viewName";
	}
	/**
	* Renderiza la vista
	*/
	public function output (){
		ob_start();
		require($this->pathView);
		$content= ob_get_contents();
		ob_end_clean();
		
		return $content;
	}
}
?>