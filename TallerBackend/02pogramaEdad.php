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
    <h1> PROGRAMA MAYOR O MENOR DE EDAD</h1>
    <p>Al ingresar la edad y dar click en enviar el sistema mostrara: </p>
    <p>• Si la edad es menos a 18 = “No es mayor de edad”</p>
    <p>• Si la edad es igual o mayor = “Es mayor de edad”</p>

    <form action="02pogramaEdad.php" method="POST">
    <P>Edad: <input type= "text" name= "txtn1"></P>
    <P><input type="submit" value="Enviar" ></P>
    </form>

    <?php
    if($_POST){
      $n1 = $_POST["txtn1"];
    
      if($n1 <18)
      {
        ?><p><?php echo " No es mayor de edad";?></p><p><?php
      }
      elseif($n1 >= 18)
      {
        ?><p><?php echo " Es mayor de edad ";?></p><p><?php
      }
      else
      {
        ?><p><?php echo "Ingrese nuevamente los datos";?></p><p><?php
      }
      
    }
    ?>
  </div>
</body>
</html>
