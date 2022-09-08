<?php
session_start();

//Constantes
define('SITEURL','http://localhost/LaOccidentall/');
define('LOCALHOST', 'db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'Occidental_Escuinapa');


//Ejecuta código SQL
$conn = mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Conexión a base de datos
$db_select = mysqli_select_db($conn,DB_NAME) or die (mysql_error()); // Selecciona la BD

 ?>
