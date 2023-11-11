<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculdora</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="contenedor">
    <h1> CALCULADORA </h1>
    <p>Digite 2 números y seleccione el tipo de operación que desee (SUMA, RESTA, MULTIPLICACIÓN O DIVISIÓN) al dar click en enviar el sistema le mostrara el resultado </p>
    <form action="01calculadora.php" method="POST">
    <p>Numero 1: <input type= "text" name= "txtn1"></p>
    <p>Numero 2: <input type= "text" name= "txtn2"></p>
    <select name="opc">
      <option value="1">sumar</option>
      <option value="2">multiplicar</option>
      <option value="3">restar</option>
      <option value="4">dividir</option>
    </select>
    <P><input type="submit"></P>
    </form>
    <?php
    
      if($_POST){
        $n1 = $_POST["txtn1"];
        $n2 = $_POST["txtn2"];
        $opcion = $_POST["opc"];

        switch($opcion)
        {
          case 1:
            $sum=$n1+$n2;?>
            <p><?php
            echo "la suma de: ".$n1."+".$n2." es: ".$sum."</font></h3>";?></p><?php
            break;
          case 2:
            $mult=$n1*$n2;?>
            <p><?php
            echo "la multiplicación de: ".$n1."*".$n2." es: ".$mult."</font></h3>";?></p><?php
            break;
          case 3:
            $rest=$n1-$n2;?>
            <p><?php
            echo "la resta de: ".$n1."-".$n2." es: ".$rest."</font></h3>";?></p><?php
            break;
          case 4:
            $rest=$n1/$n2;?>
            <p><?php
            echo "El resultado de dividir:".$n1."/".$n2." es: ".$rest."</font></h3>";?></p><?php
            break;
          default:
            echo "Ingrese los daltos de la suma";
            break;
        }
      }
    ?>
  </div>
</body>
</html>