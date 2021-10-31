<?php

include("db.php");

if(isset($_GET['Codigo'])) {
  $Codigo = $_GET['Codigo'];
  $query = "DELETE FROM listaproducto WHERE Codigo = $Codigo";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Producto removido';
  $_SESSION['message_type'] = 'danger';
  header('Location: carrito.php');
}

?>
