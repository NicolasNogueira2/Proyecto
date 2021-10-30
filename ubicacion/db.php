<?php
/*Datos de conexion a la base de datos*/
session_start();
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "proyecto";


$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
  echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>
<!-- 
if (isset($con)){
  echo 'DB is connected';        
  }
Comprueba la conexion
se leeira 
si existe (isset) esta conexion (%con) que muestre "DB is connected"
 -->
