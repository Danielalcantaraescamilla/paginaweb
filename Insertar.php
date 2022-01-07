<?php
require_once("autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Registro</title>
</head>
<body background="fondo.jpg">
<center>
<font size="3">
<center><h1> <b>INSERTA LOS DATOS</b> </h1></center>
   
   
   <?php
     
      if(isset($_POST["Inserta"])){
        
          ?>
          
      <form method="post">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre"> <br>
              <label for="edad"> Edad</label>
              <input type="text" name="edad" id="edad"> <br>
              <label for="correo">Correo</label>
              <input type="text" name="correo" id="correo"> <br>
              <input type="submit" name="guardar" value="Guardar">
            </form>
         <center>
         <?php
      
    }elseif(isset($_POST["guardar"])){


            $nombre=$_POST["nombre"];
            $edad=$_POST["edad"];
            $correo=$_POST["correo"];
            $inserta = new Acciones();
            $resultado = $inserta->Insertar($nombre, $edad, $correo);
            if ($resultado) header("location: http://localhost/proyecto/principal.php");
            else echo "error al intentar registrar la infomacion";
      
          }
      
          else{
        
      
            header("location: http://localhost/proyecto/principal.php");
      
          }
    
    
   
   ?>


</background=>
</html>