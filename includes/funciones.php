<?php

//CONSULTAR UNA BASE DE DATOS

function obtener_servicios() {
    try {
        //1. importar credenciales
        require 'databases.php';

        //2. consulta SQL
        $sql = "SELECT * FROM servicios;";

        //3. Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        //4. Acceder a los resultados
        echo '<pre>';
        var_dump( mysqli_fetch_assoc($consulta) );
        echo '</pre>';

        //5.Cerrar la conexión (opcional)

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();
