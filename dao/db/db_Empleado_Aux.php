<?php
class LocalConectorAux{
    private $host = "127.0.0.1:3306";
    private $usuario = "u543707098_grammito";
    private $clave = "Grammer1";
    private $db = "u543707098_Parte";
    public $conexion;
    public function conectarAux(){
        $conAux = mysqli_connect($this->host,$this->usuario,$this->clave,$this->db);
        return $conAux;
    }
}
?>
