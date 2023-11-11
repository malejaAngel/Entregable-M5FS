<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Carrito de compras</title>
</head>
<body>
 
<form action="" method="GET">
    <div class="form-contacto text-center">
          <img src="../img/Logo2.png" alt="Logo terrarium">
          <h4>Carrito de compras</h4>
          <hr />
    </div> 
    <div class="form-contacto text-left">
          <h6>Información personal</h6>
          <hr />
    </div> 
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nombre">Nombre</label>
        <input type="text"name="nombre" class="form-control" id="nombre" placeholder="Digite nombre" required>
        </div>
        <div class="form-group col-md-6">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Digite Apellido" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="id">Cédula</label>
        <input type="number" name="id" class="form-control" id="id" placeholder="Digite número de cédula" required>
        </div>
        <div class="form-group col-md-6">
        <label for="phone">Télefono</label>
        <input type="number" name="phone" class="form-control" id="phone" placeholder="Digite número de télefono" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="ciudad">Ciudad</label>
        <input type="text"name="ciudad" class="form-control" id="ciudad" placeholder="Digite ciudad" required>
        </div>
        <div class="form-group col-md-6">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Digite dirección" required>
        </div>
        <button class="btn btn-outline-success my-2 my-sm-0 btn-block" type="button">Guardar datos</button>
    </div>
    </form>
   
    <form action="" method="POST">
    <div class="form-contacto text-left">
          <h6>Productos</h6>
          <hr />
          <p>Imagenes de referencia</p>
          <table >
            <tr>
                <td></td>
                <td><img class="proyecto" src="../img/Producto_4.png" alt="Producto plantas"/></td>
                <td><img class="proyecto" src="../img/Producto_13.png" alt="Producto plantas"/></td>
                <td><img class="proyecto" src="../img/Producto_11.png" alt="Producto plantas"/></td>
                <td><img class="proyecto" src="../img/Producto_16.png" alt="Producto plantas"/></td>
            </tr>
    </table>
    <hr />
    <p>Detalles de la compra</p>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="n1">Cantidad</label>
        <input type="number" step="any" name="n1" class="form-control" id="n1" placeholder="Digite número 1" required>
        </div>
        <div class="form-group col-md-6">
        <label for="n2">Codigo de descuento</label>
        <input type="number" step="any" name="n2" class="form-control" id="n2" placeholder="Digite número 2" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label for="producto">Producto</label>
        <select id="producto" name="producto" class="form-control" required>
            <option value="">Seleccione el producto...</option>
            <option value="1">Suculentas</option>
            <option value="2">Cactus</option>
            <option value="3">Macetas</option>
            <option value="4">Tierra</option>
        </select>
        </div>
    </div>
    <button class="btn btn-outline-success my-2 my-sm-0 btn-block" type="submit" name="operar" class="btn btn-primary">Confirmar compra</button>
    <div class="form-contacto text-left">
    <hr />
    <h6 class="text-center">COMPROBANTE</h6>
    
    <?php

    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $producto = $_POST['producto'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $id = $_GET['id'];
        $phone = $_GET['phone'];
        $ciudad = $_GET['ciudad'];
        $direccion= $_GET['direccion'];
        $consecutivo= mt_rand(1,3000);

        switch ($producto) {
            case '1':
                $total = $n1 * 25000;
                $ref= 'Suculentas'; 
                break;
            case '2':
                $total = $n1 * 20000;
                $ref = 'Cactus';
                break;
            case '3':
                $total = $n1 * 18000;
                $ref = 'Macetas';
                break;
            case '4':
                $total = $n1 * 15000;
                $ref = 'Tierra';
                break;
        }
        echo 
        'Número: '.$consecutivo.'<br>'.
        'Nombre: '.$nombre.' '.$apellido.'<br>'.
        'Cédula: '.$id.'<br>'. 
        'Télefono: '.$phone.'<br>'.
        'Ciudad: '.$ciudad.'<br>'.
        'Direcciónn: '.$direccion.'<br>'.
        '-------------------------'.'<br>';
        echo '<p>Producto: '.$ref.'<br> Cantidad: '.$n1.'<br> Codigo de descuento: '.$n2.'<br> TOTAL = '.$total.'</p>';
        
    }
    
    ?>
    </div>
    </form>
    <div class="form-contacto text-center">
    </div>
</body>
</html>