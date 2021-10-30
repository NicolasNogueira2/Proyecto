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


if (isset($_POST['update'])) {
  $Codigo = $_GET['Codigo'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $query = "UPDATE producto set imagen = '$imagen' WHERE Codigo=$Codigo";
  mysqli_query($con, $query);
  $_SESSION['message'] = 'Producto modificado correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_img.php?Codigo=<?php echo $_GET['Codigo']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" name="imagen" /><br><br>
          </div>
        <button class="btn-success" name="update">
          Modificar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
