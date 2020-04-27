<?php
class Model {
    private $tableName;

    public function __construct ($model) {
        $this->tableName = str_replace('Model','',$model);

        $instance = Conexion::singleton();
    }

    public function all (){
        $rows = mysql_query("SELECT * FROM $this->tableName");
        return self::fetchAllClass($rows);
    }

    private function fetchAllClass ($rows) {
        $data = array();

        while ($row=mysql_fetch_assoc($rows)){
            $data[] = self::fetchClass($row);
        }

        return $data;
    }

    private function fetchClass ($properties) {
        $class = $this->tableName."Model";
        
        $class = new $class;

        $propertiesClass = get_object_vars($this);
        foreach($propertiesClass as $property => $value){
            if(isset($properties[$property])){
                $class->$property = $properties[$property];
            }
        }

        return $class;
    }
}

?>