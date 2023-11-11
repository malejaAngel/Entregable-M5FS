<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="contenedor">
    <h1> DATOS</h1>
    <?php
      if($_GET){
        $nombre = $_GET["txtn1"];
        $apellido = $_GET["txtn2"];
        $cedula = $_GET["txtn3"];
      
        if(empty($_GET))
        {
          echo "Ingrese nuevamente los datos";
        }
        else
        {?><p><?php 
          echo " Nombre: ".$nombre."<br>";
          echo " Apellido: ".$apellido."<br>";
          echo " Cedula: ".$cedula;?></p><p><?php
        }
      }
    ?>
  </div>
</body>
</html>