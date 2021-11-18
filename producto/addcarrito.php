 <?php
include("db.php");

$Nombre = '';
$Descripcion= '';
$Codigo= '';
$Stock= '';
$Precio= '';
$imagen= '';

if  (isset($_GET['Codigo'])) {
  $id = $_GET['Codigo'];
  $query = "SELECT * FROM producto WHERE Codigo=$id";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Descripcion = $row['Descripcion'];
    $Stock = $row['Stock'];
    $Precio = $row['Precio'];
  }
}
?>
 <?php include("db.php"); ?>
 <?php session_start(); if (isset($_SESSION["usuario"])) { ?>
<?php
      

      if (isset($_POST['addcarrito'])) {
        $query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuario]'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $ci = $row['CI']; 
        } 
        $cantidad = $_POST['cantidad'];
        $subTotal = $Precio*$cantidad;
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha = date("y-m-d");

        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $ci = $row['CI']; 
        } 
        $cantidad = $_POST['cantidad'];
         $subTotal = $Precio*$cantidad;
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha = date("y-m-d");

        $query = "SELECT idCarrito as idCarrito FROM carrito where idUsuario = '$ci'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $idCarrito = $row['idCarrito'];
        }
        $query = "SELECT max(idCarrito) as idCarrito FROM carrito";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $idCarrito = $row['idCarrito'];
        }

        $query = "SELECT * FROM carrito where idCarrito = '$idCarrito'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) >= 1) {
          $row = mysqli_fetch_array($result);
          $ciCarrito = $row['idUsuario'];
          $estadoCarrito = $row['estadoCarrito'];
        }

          if ($ciCarrito == $ci) {
              if ($estadoCarrito == '1') {
                 
                 $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha ,subTotal, idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha', '$subTotal' ,'$ci' , '1')";
                 $result = mysqli_query($con, $query);
               } elseif($estadoCarrito == "0"){
                $idCarrito = $idCarrito+1;
                 $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha ,subTotal, idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha', '$subTotal' ,'$ci' , '1')";
                 $result = mysqli_query($con, $query);
               }
            # $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha , idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha' ,'$ci' , '1')";
          #  $result = mysqli_query($con, $query);
          }else{
            $idCarrito = $idCarrito+1;
                 $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha ,subTotal, idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha', '$subTotal' ,'$ci' , '1')";
                 $result = mysqli_query($con, $query);
          }

        # $cantidad = $_POST['cantidad']; 
        # $subTotal = $Precio*$cantidad;
        # if ($cantidad>='1') {
        
        # date_default_timezone_set("America/Argentina/Buenos_Aires");
        #   $fecha = date("y-m-d");
        # $query = "INSERT INTO carrito (idProducto, cantidad,fecha , idUsuario, estadoCarrito) VALUES ('$id', '$cantidad', '$fecha' ,'$ci' , '1')";
        # $result = mysqli_query($con, $query);
      }
  }else{ 
  

      if (isset($_POST['addcarrito'])) {
        $query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuarioCRUD]'";
       $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $ci = $row['CI']; 
        } 
        $cantidad = $_POST['cantidad'];
        $subTotal = $Precio*$cantidad;
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha = date("y-m-d");

        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $ci = $row['CI']; 
        } 
        $cantidad = $_POST['cantidad'];
         $subTotal = $Precio*$cantidad;
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha = date("y-m-d");

        $query = "SELECT idCarrito as idCarrito FROM carrito where idUsuario = '$ci'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $idCarrito = $row['idCarrito'];
        }
        $query = "SELECT max(idCarrito) as idCarrito FROM carrito";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $idCarrito = $row['idCarrito'];
        }

        $query = "SELECT * FROM carrito where idCarrito = '$idCarrito'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) >= 1) {
          $row = mysqli_fetch_array($result);
          $ciCarrito = $row['idUsuario'];
          $estadoCarrito = $row['estadoCarrito'];
        }

          if ($ciCarrito == $ci) {
              if ($estadoCarrito == '1') {
                 
                 $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha ,subTotal, idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha', '$subTotal' ,'$ci' , '1')";
                 $result = mysqli_query($con, $query);
               } elseif($estadoCarrito == "0"){
                $idCarrito = $idCarrito+1;
                 $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha ,subTotal, idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha', '$subTotal' ,'$ci' , '1')";
                 $result = mysqli_query($con, $query);
               }
            # $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha , idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha' ,'$ci' , '1')";
          #  $result = mysqli_query($con, $query);
          }else{
            $idCarrito = $idCarrito+1;
                 $query = "INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha ,subTotal, idUsuario, estadoCarrito) VALUES ('$idCarrito','$id', '$cantidad', '$fecha', '$subTotal' ,'$ci' , '1')";
                 $result = mysqli_query($con, $query);
          }

        # $cantidad = $_POST['cantidad']; 
        # $subTotal = $Precio*$cantidad;
        # if ($cantidad>='1') {
        
        # date_default_timezone_set("America/Argentina/Buenos_Aires");
        #   $fecha = date("y-m-d");
        # $query = "INSERT INTO carrito (idProducto, cantidad,fecha , idUsuario, estadoCarrito) VALUES ('$id', '$cantidad', '$fecha' ,'$ci' , '1')";
        # $result = mysqli_query($con, $query);
      }
  }
   header('Location: http:/proyecto/carrito/carrito.php');
  ?>
