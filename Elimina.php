<?php
require_once("autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registro</title>

</head>
<body background="fondo.jpg">
<center>
<font size="3">
<center><h1> <b>ELIMINA LOS DATOS</b> </h1></center>
    <?php
      if(isset($_POST["Elimina"])){
          $idb = $_POST["id"];
          $consulta = new Acciones();
          $resultado = $consulta->ConsultaId($idb);
         
         ?>
         
         
         <form method="post">
              <input type="hidden" name="id" value="<?php echo $resultado[0]["id"] ?>">
              <label for="id">Id</label>
              <input type="text" name="id" id="id" value="<?php echo $resultado[0]["id"] ?>" disabled> <br>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" value="<?php echo $resultado[0]["nombre"] ?>"disabled> <br>
              <label for="edad"> Edad</label>
              <input type="text" name="edad" id="edad" value="<?php echo $resultado[0]["edad"] ?>"disabled> <br>
              <label for="correo">Correo</label>
              <input type="text" name="correo" id="correo" value="<?php echo $resultado[0]["correo"] ?>"disabled> <br>
              <input type="submit" name="elimina" value="Eliminar">
           
            </form>
            <center>
          <?php
      
    }elseif(isset($_POST["elimina"])){
          $id=$_POST["id"];
          $elimina = new Acciones();
          $resultado = $elimina->Elimina($id);
            if ($resultado > 0) header("location: http://localhost/proyecto/principal.php");
            else echo "Error en la actualizacion";
      }else{
    
        header("location: http://localhost/proyecto/principal.php");
      }
    
   
   ?>

</body>
</html>