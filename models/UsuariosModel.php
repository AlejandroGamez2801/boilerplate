<?php
class UsuariosModel extends Model {
    public $id;
    public $nombre_completo;

    public function __construct () {
        $clase = get_class();
        parent::__construct($clase);
    }
}
?>