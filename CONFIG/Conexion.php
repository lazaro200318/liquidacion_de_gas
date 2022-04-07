<?php
session_start ();
class Conectar {
    protected $dbh;
    protected function Conexion (){
    try {
        $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=liquidacion_01","root","");
        return $conectar;
    }catch (Exception $e){
        print "error en la base datos de tu sistema!".$e->getMessage() . "<br/>";
        die();
    }   
    }
Public function set_names (){
    return $this->dbh->query("SET NAMES 'utf8'");
    }
public function ruta(){
    return "http://localhost:8080/liquidacion/";
}   
}
?>