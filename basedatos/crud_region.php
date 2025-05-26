<?php

    // vamos a utilizar la conexión existente 
    require_once 'conexion.php';
    if (isset($_POST['btn_eliminar'])) {
        
        // se recibe el código de la región a eliminar
        $codigo = $_POST['hidden_codigo'];
        
        // consulta SQL para eliminar la región
        $sql = "DELETE FROM regiones WHERE cod_region =". $codigo;
        
        // ejecutar el código en la base de datos
        try {
            $ejecutar = mysqli_query($conexion, $sql);
            echo "<br>Datos eliminados correctamente.";
            header("Location: vista_regiones.php");
            exit;
        } catch (Exception $th) {
            echo "<br>Error al eliminar los datos: <br>" . $th;
        }
    }

    if (isset($_POST['btn_insertar'])){
        // vamos a utilizar la conexión existente 
        require_once 'conexion.php';
        
        // variables para almacenar los datos del formulario
        // se reciben los datos del formulario
        $codigo = $_POST['txt_codigo'];
        $nombre = $_POST['txt_nombre'];
        $desc = $_POST['txt_desc'];

        echo "Datos de la región: <br>";
        echo "Código: $codigo <br>";
        echo "Nombre: $nombre <br>";
        echo "Descripción: $desc";

        //vamos a utilizar la concexión existente
        require_once ("conexion.php");
        $sql = "INSERT INTO regiones(cod_region,nombre,descripcion) VALUES (".$codigo.",'".$nombre."','".$desc."');";
        //ejecutar el codigo en la base de datos
        try {
            $ejecutar = mysqli_query($conexion, $sql);
            //echo "Valor de Ejecutar: ". $ejecutar;
            echo "<br>Datos insertados correctamente.";
            header("Location: vista_regiones.php");
            exit;
        } catch (Exception $th) {
            echo "<br>Error al insertar los datos: <br>" . $th;
        }
    }
?>