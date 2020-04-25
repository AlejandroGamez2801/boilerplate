<?php
class View{
	/** @var string*/
	protected $pathView;
	/** @var array */
	protected $values;

	public function __construct($viewName){
		$this->pathView = "views/$viewName";
		$this->values = array();
	}

	public function set ($key, $value) {
		$this->values[$key] = $value;
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