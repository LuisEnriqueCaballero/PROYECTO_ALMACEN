<?php 
class Conexion{
    private $db="nuevo_dbinsergenv";
    private $user= "root";
    private $password="";
    private $host="localhost";

    public function conectar(){
        $conectar=mysqli_connect($this->host,$this->user,$this->password,$this->db);
        return $conectar;
    }

}