<?php
require_once("autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Editar Registro</title>

  </head>
  
  <body background="fondo.jpg">
<center>
<font size="3">
<center><h1> <b>ACTUALIZA LOS DATOS</b> </h1></center>
    
    <?php
      
      if(isset($_POST["Actualiza"])){
      
        $idb = $_POST["id"];
      
          $actualiza = new Acciones();
        
          
          $resultado = $actualiza->ConsultaId($idb);
          
        ?> </font>
          <form method="post">
            <input type="hidden" name="id" value="<?php echo $resultado[0]["id"] ?>">
              <label>Id</label>
            <input type="text"  value="<?php echo $resultado[0]["id"] ?>" disabled> <br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $resultado[0]["nombre"] ?>"> <br>
            <label for="edad"> Edad</label>
            <input type="text" name="edad" id="edad" value="<?php echo $resultado[0]["edad"] ?>"> <br>
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" value="<?php echo $resultado[0]["correo"] ?>"> <br>
            <input type="submit" name="guardar" value="Guardar">
            </form>
            </center>
          <?php

    }elseif(isset($_POST["guardar"])){
          
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $correo=$_POST["correo"];
        $actualiza = new Acciones();
        $resultado = $actualiza->Actualizar($id, $nombre, $edad, $correo);
            if ($resultado > 0) header("location: http://localhost/proyecto/principal.php");
            else echo "error al intentar Actualizar la infomacion";
      }else{
          header("location: http://localhost/proyecto/principal.php");
      }
    
    ?>

</body>

</html>