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

