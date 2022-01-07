<?php
error_reporting(E_ERROR | E_PARSE);
class Conexion {    
    
private $host="localhost";
private $db="proyecto";
private $usr="root";
private $pdw="";
private $conecta;

public function __construct(){
       $cadenadeconexion="mysql:host=".$this->host.";dbname=".$this->db."; charset=utf8mb4";
       try{

            $this->conecta=new PDO($cadenadeconexion,$this->usr,$this->pwd);
            $this->conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
       }catch(Exception $e){

        $this->conecta="Error de conexion";
        echo "Error:" .$e->getMessage();
       } 
       
   }
   public function AbrirConexion() {
       return $this->conecta;



   }
   
}



?>