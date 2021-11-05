  <?php

include('db.php');

if (isset($_POST['save_producto'])) {
  $Codigo = $_POST['codigo'];
  $Nombre = $_POST['Nombre'];
  $Descripcion = $_POST['Descripcion'];
  $estado = $_POST['estado'];
  $Stock = $_POST['Stock'];
  $tipo_iva = $_POST['tipo_iva'];
  $Precio = $_POST['Precio'];
  $Destacado = $_POST['Destacado'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $query = "INSERT INTO producto (codigo, Nombre ,Descripcion , estado ,Stock, tipo_iva, Precio, imagen, destacado) VALUES ('$Codigo','$Nombre', '$Descripcion','$estado', '$Stock', '$tipo_iva', '$Precio', '$imagen', '$Destacado')";
  $result = mysqli_query($con, $query);
  if(!$result) {
  $_SESSION['message'] = 'Error al guardar el producto';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');

    
  }else{

  $_SESSION['message'] = 'Producto guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}
}

?>
