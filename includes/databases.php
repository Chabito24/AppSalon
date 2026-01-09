<?php
/** CONEXIO A BASE DE DATOS
 * 1.localhost: servidor, tambien puede usr 127.0.0.1
 * 2.root: user
 * 3.root: pasword
 * 4.appsalon:nombre de la base de datos
 * 
 * mysqli_connect permite asignar el parametro para conectarnos a una base de datos
 * $db: lo asignamos a una variable para posteriormente ven en pantalla a que bdd nos conectamos
 * ejemplo mysqli_connect(host, usuario, password, base_de_datos);

 */
$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

// Verifica si la conexión a la base de datos falló.
// En PHP, mysqli_connect() devuelve false si no logra conectarse.
if (!$db) {

  error_log("DB error: " . mysqli_connect_error()); // lo guarda en logs
  die("Error de conexión: Intenta mas tarde"); // die() detiene la ejecución del script inmediatamente.

} 
/**
 * echo '<pre>'; // organiza el texto
 * var_dump($db); // muestra db
 * echo '<pre>';
 */

