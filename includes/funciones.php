<?php

//CONSULTAR UNA BASE DE DATOS

function obtener_servicios() {
    try {
        //1. importar credenciales: traemos la bd que tengo en databases.php
        require 'databases.php';

        //2. consulta SQL: hacemos la consulta como si la hicieramos directamente en MySQL
        $sql = "SELECT * FROM servicios LIMIT 8;";

        //3. Realizar la consulta: creamos una variable y por medio de mysqli_query llamamos la variabe le de la base de datos cread en databases.php y luego la consulta realizada en el punto anterior
        $consulta = mysqli_query($db, $sql);

        return $consulta;

        //4. Acceder a los resultados
        //echo '<pre>';
        //imprime en este caso el primer dato de la tabla servicios ya previamente creada en MySQL 
        /**
         * NOS LLEVAMOS ESTE CODIGO PARA INDEX.PHP,ya que necesitamos ver el resultado es es un div diseñado para mostrar estos datos, 
         * ver div con la clase listado de servicios
        */
        //var_dump( mysqli_fetch_assoc($consulta) ); 
        //echo '</pre>';

        //5.Cerrar la conexión (opcional)
        //$resultado = mysqli_close($db); //cierra la conexion a la bases de datos
        //echo $resultado; //imprimer el resultado LO DEJO COMENTADO POR QUE POR EL MOMENTO NO REQUIERO CERRA LA CONEXION DE LA BD

    } catch (\Throwable $th) { //Throwable atrapa los errores que se puedan generar en el try y los asigna a una variable en este caso llamada $th
        var_dump($th); //imprimimos el error que se capturo en $th
    }
}

obtener_servicios();
