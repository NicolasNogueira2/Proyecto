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
  $Nombre= $_POST['Nombre'];
  $Descripcion = $_POST['Descripcion'];
  $estado = $_POST['estado'];
  $tipo_iva = $_POST['tipo_iva'];
  $Stock = $_POST['Stock'];
  $Precio = $_POST['Precio'];
  $Destacado = $_POST['Destacado'];
  $query = "UPDATE producto set Nombre = '$Nombre', Descripcion = '$Descripcion',estado = '$estado',Destacado = '$Destacado', tipo_iva = '$tipo_iva', Stock = '$Stock', Precio = '$Precio' WHERE Codigo=$Codigo";
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
      <form action="edit.php?Codigo=<?php echo $_GET['Codigo']; ?>" method="POST" enctype="multipart/form-data">
        <!-- 
        <div class="form-group">
          <input name="Codigo" type="int" class="form-control" value="<?php echo $Codigo; ?>" placeholder="Codigo">
        </div>
        -->
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Nombre">
        </div>
        <div class="form-group">
        <textarea name="Descripcion" class="form-control" cols="30" rows="10" placeholder="Modificar descripcion"><?php echo $Descripcion;?></textarea> 
        </div>
         <div class="form-group">
          <input name="Stock" type="int" class="form-control" value="<?php echo $Stock; ?>" placeholder="Stock">
        </div>
        <div class="form-group">
          <input name="Precio" type="int" class="form-control" value="<?php echo $Precio; ?>" placeholder="Precio">
        </div>
        <div class="form-group">
            <select name="estado">
              <option value="activo">Activo</option>
              <option value="inactivo">Inactivo</option>
            </select>
        </div>
        <div class="form-group">
          <select name="tipo_iva">
              <option value="1">Tipo iva 1</option>
              <option value="2">Tipo iva 2</option>
              <option value="3">Tipo iva 3</option>
            </select>
          </div>

          <div class="form-group">
          <select name="Destacado">
              <option value="Normal">Normal</option>
              <option value="Destacado">Destacado</option>
            </select>
          </div>
        <div class="form-group">
            <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
            <a href="edit_img.php?Codigo=<?php echo $row['codigo']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
          </div>
        <button class="btn-success" name="update">
          Modificar
        </button>
        <button  class="btn-success"> 
          <a href="http://localhost/proyecto/CRUD2.0/index.php">Volver</a>
         
        </button>
        <style>
          .btn-success a{
            text-decoration: none;
            color: white;
          }
        </style>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
