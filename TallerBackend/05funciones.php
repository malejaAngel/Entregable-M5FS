<?php
    function ObtenerUsuarios() 
    {
        try{
            //Importar la conexion
            require '05database.php';
            //var_dump($db);;
            $sql = "SELECT * FROM usuarios";
            $consulta = mysqli_query($db,$sql);
            //Crear un arreglo vacio
            $usuarios = [];
            $i=0;
            return $consulta;

        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    function BuscarNombre($texto)
    {
        require '05database.php';
        $sql = "SELECT * from usuarios WHERE nombre LIKE '%".$texto."%';";
        $consulta = mysqli_query($db,$sql);
        return $consulta;
    }
    function BuscarApellido($texto)
    {
        require '05database.php';
        $sql = "SELECT * from usuarios WHERE apellido LIKE '%".$texto."%';";
        $consulta = mysqli_query($db,$sql);
        return $consulta;
    }
    function BuscarCedula($texto)
    {
        require '05database.php';
        $sql = "SELECT * from usuarios WHERE cédula LIKE '%".$texto."%';";
        $consulta = mysqli_query($db,$sql);
        return $consulta;
    }
?>
