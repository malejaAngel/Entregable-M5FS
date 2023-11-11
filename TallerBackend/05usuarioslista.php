<?php
    //Importar funciones
    require '05funciones.php';
    $usuarios = ObtenerUsuarios();

    if (isset($_GET['nombre'])) {
        $usuarios = BuscarNombre($_GET['nombre']);
    }
    if (isset($_GET['apellidos'])) {
        $usuarios = BuscarApellido($_GET['apellidos']);
    }
    if (isset($_GET['cédula'])) {
        $usuarios = BuscarCedula($_GET['cédula']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1 class="texto-centrado">Listado usuarios</h1>
    <div class="contenedor2">
        <p>El programa permite filtrar y consultar los datos de la tabla:</p>
        <div class="contenedor-lista">
            <div class="formFiltro">
                <div >
                    <form action="05usuarioslista.php" method="get">
                        <p>Nombre:
                        <input type="text" name="nombre" id="nombre">
                        <input type="submit" value="buscar" class="boton2"></p>
                    </form>
                </div>
                <div >
                    <form action="05usuarioslista.php" method="get">
                        <p for="apellidos">Apellido:
                        <input type="text" name="apellidos" id="apellidos">
                        <input type="submit" value="buscar" ></p>
                    </form>
                </div>
                <div >
                    <form action="05usuarioslista.php" method="get">
                        <p for="cédula">Cédula:&nbsp
                        <input type="number" name="cédula" id="cédula">
                        <input type="submit" value="buscar"></p>
                    </form>
                </div>
            </div>  
            <div class="tabla">
                <?php
                    $id = 1;
                    $conn = mysqli_connect('localhost','root','aleja1594','mi_proyecto');
                    $sql = "SELECT * FROM usuarios WHERE id = $id";
                    $result = mysqli_query($conn,$sql);  
                    echo "
                    <table border = 1 cellspacing = 2 cellpadding = 2>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cédula</th>
                        </tr>";
                    ?>
                    <?php
                    while($usuario= mysqli_fetch_assoc($usuarios))
                        {echo "
                            <tr>
                                <td>".($usuario ['id'])."</td>
                                <td>".($usuario ['nombre'])."</td>
                                <td>".($usuario ['apellido'])."</td>
                                <td>".($usuario ['cédula'])."</td>
                            </tr>";
                        }
                    echo "</table>";       
                ?>
            </div>
        </div>
    </div>
</body>
</html>