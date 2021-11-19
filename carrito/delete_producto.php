<?php

include("db.php");
session_start();
if (isset($_SESSION['usuario'])) {
  $query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuario]'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $ci = $row['CI']; 
  } 
}elseif ($_SESSION['usuarioCRUD']) {
  $query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuarioCRUD]'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $ci = $row['CI']; 
 }   
}

if(isset($_GET['Codigo'])) {
  $Codigo = $_GET['Codigo'];
  $query = "UPDATE carrito SET estadoCarrito = '0' where idUsuario = '$ci' and estadoCarrito='1' and idProducto = '$Codigo'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Producto removido';
  $_SESSION['message_type'] = 'danger';
  header('Location: carrito.php');
}

?>
