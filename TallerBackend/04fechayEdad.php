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
        <h1> CALCULAR EDAD </h1>
        <P>Al ingresar la fecha digite primero el año luego el mes y al final el día separados por guiones</P>
        <form action="04fechayEdad.php" method="POST">
        <P>Fecha de nacimiento: <input type= "text" placeholder="AAAA-MM-DD"  name= "date"></P>
        <P><input type="submit"></P>
        </form>
        <?php
            if($_POST){
                $fecha = $_POST["date"];
                function edad($fecha){
                    $dia = date ("j");
                    $mes = date ("n");
                    $anio = date ("Y");
        
                    $anioNac = substr($fecha,0,4);
                    $mesNac = substr($fecha,5,2);
                    $diaNac = substr($fecha,8,2);
        
                    if($mesNac>$mes)
                    {
                        $edad = $anio -$anioNac -1;
                    }
                    elseif($mes==$mesNac && $diaNac> $dia)
                    {
                        $edad = $anio - $anioNac -1;
                    }
                    else
                    {
                        $edad = $anio - $anioNac;
                    }
                    return $edad;

                }
                ?><p><?php echo"Su edad es de ".edad("$fecha")." a&ntilde;os , por tanto: ";?></p><p><?php

                if(edad("$fecha")<18)
                {
                    ?><p><?php echo " No es mayor de edad";?></p><p><?php
                }
                elseif(edad("$fecha") >= 18)
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

