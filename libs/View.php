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
	public function output ($vars = array()) {
		if (is_array($vars)) {
			foreach ($vars as $key => $value) {
				$$key = $value;
			}
		}

		$key = null;

		ob_start();
		require($this->pathView);
		$content= ob_get_contents();
		ob_end_clean();
		
		$output = $content;

		foreach ($this->values as $key => $value) {
			$tagToReplace = "[@$key]";
			$output = str_replace($tagToReplace, $value, $output);
		}

		return $output;
	}
}
?>