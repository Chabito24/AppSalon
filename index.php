<?php

    // Incluye (require) el archivo de funciones usando una ruta absoluta basada en el directorio actual (__DIR__).
    // - __DIR__ apunta a la carpeta donde está ESTE archivo.
    // - require detiene la ejecución con error fatal si el archivo no existe o no se puede cargar (a diferencia de include).
    // Esto asegura que las funciones necesarias (por ejemplo, obtener_servicios()) estén disponibles.
    require __DIR__ . '/includes/funciones.php'; //incluimos el php de funciones

    // Llama a la función obtener_servicios() (definida en funciones.php).
    // Normalmente esta función:
    // - Abre/usa una conexión a la base de datos
    // - Ejecuta una consulta SQL (SELECT de servicios)
    // - Retorna un "result set" de MySQLi (un objeto/resultado que luego se recorre con mysqli_fetch_assoc).
    // La variable $consulta queda con el resultado de esa consulta para iterarlo más abajo.
    $consulta = obtener_servicios();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón de Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <div class="contenedor-estetica">
        <div class="imagen"></div>
        <div class="app">
            <header class="header">
                <h1>App Prueba</h1>
            </header>

            <div class="seccion">
                <h2>Servicios</h2>
                <p class="text-center">Elige tus Servicios a Continuación</p>
                <div id="servicios" class="listado-servicios">
                    <?php  
                        // Bucle while para recorrer el resultado de la consulta ($consulta) fila por fila.
                        // mysqli_fetch_assoc($consulta):
                        // - Devuelve un array asociativo con la fila actual (ej: ['nombre' => ..., 'precio' => ...])
                        // - Cuando ya no hay más filas, devuelve null/false y el while termina.
                        while ($servicio = mysqli_fetch_assoc($consulta)) { ?>

                        <div class="servicio">
                            <!-- Imprime el campo 'nombre' de la fila actual (servicio) -->
                            <p class="nombre-servicio"> <?php echo $servicio['nombre'] ?></p>

                            <!-- Imprime el campo 'precio' de la fila actual (servicio) -->
                            <p class="precio-servicio"> <?php echo $servicio['precio'] ?></p>
                        </div>

                        <?php  
                        // Cierra el bloque del while.
                        } ?>
                    ?>           
                </div>
            </div>
        </div>
    </div>
</body>
</html>
