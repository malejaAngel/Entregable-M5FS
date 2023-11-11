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
  <h1> FORMULARIO DATOS</h1>
  <form class="formDatos"action="../ProyectoBackend/03mostrarDatos.php" method="GET">
    <P>Nombre: <input type= "text" placeholder="Aqui escribe tu nombre" name= "txtn1"></P>
    <P>Apellido: <input type= "text" placeholder="Aqui escribe tu apellido" name= "txtn2"></P>
    <P>Cedula: <input type= "number" placeholder="Aqui escribe tu cedula" name= "txtn3"></P>
    <P><input type="submit" value="Enviar" ></P>
  </form>
</body>
</html>
