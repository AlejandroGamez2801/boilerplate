<?php
class ExampleModel extends Model {
    /**
     * Toda las variables de la entidad de la base de datos deben de
     * ir como variables globales y publicos, tal como $id.
     */
    public $id;

    public function __construct () {
        $clase = get_class ();
        parent::__construct($clase);
    }
}

?>