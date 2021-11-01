<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CRUD </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
   <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
    <?php
    session_start();
  if(!isset($_SESSION["usuario"])){
    header("Location:login.php");
  }

?>
        
   
    <nav class="navbar navbar-dark bg-dark">

      <div class="container">

        <?php

            $busqueda = strtolower($_REQUEST['busqueda']);
            if (empty($busqueda)) 
            {
               header("Location: index.php");
            }
        ?>


        <a class="navbar-brand" href="index.php">CRUD</a>
        
      
        </a>
           <div class="search-box">
            <form action="buscar_producto.php" method="get" class="form_search">
             <input class="search-txt" type="text" name="busqueda" placeholder="Buscar producto...">
              
            </form>
         <style>
          .search-box{
            color: white;
            text-decoration: none;
            width: 30%;
            border-radius: 5px;
          }
          .search-txt{
            border: none;
            background: none;
            text-decoration-color: white;
            opacity: 60%;
            outline: none;
            padding: 0;
            color: white;
            font-size: 14px;
            transition: 0.4s;
            width: 85%;
            margin-left: 20px;
            float: left;
          }
         </style>
         
       </div>
       <p><a href="cierre.php">Cerrar Sesion</a></p>
      </div>
    </nav>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD PRODUCTOS FORM -->
      <div class="card card-body">
        <form action="save_producto.php" method="POST" enctype="multipart/form-data">
           
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
          </div>
          <div class="form-group"> 
            <textarea name="Descripcion" rows="2" class="form-control" placeholder="Descripcion" required></textarea>
          </div>
          <div class="form-group">
            <input type="int" name="Precio" class="form-control" placeholder="Precio" required>
          </div>
           <div class="form-group">
            <input type="int" name="Stock" class="form-control" placeholder="Stock" required>
          </div>
          <div class="form-group">
            <select name="estado">
              <option selected value="">Seleccione una opción</option>
              <option value="activo">Activo</option>
              <option value="inactivo">Inactivo</option>
            </select>
          </div>
          <div class="form-group">
          <select name="tipo_iva" required><br>
              <option selected value="">Seleccione una opción</option>
              <option value="1">Tipo iva 1</option>
              <option value="2">Tipo iva 2</option>
              <option value="3">Tipo iva 3</option>
            </select>
          </div>

          <div class="form-group">
          <select name="Destacado">
            <option selected value="">Seleccione una opción</option>
              <option value="Normal">Normal</option>
              <option value="Destacado">Destacado</option>
            </select>
          </div>
          <div class="form-group">
            <input type="file" name="imagen" required><br><br>
          </div>
          <input type="submit" name="save_producto" class="btn btn-success btn-block" value="Guardar Producto">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Iva</th>
            <th>Estado</th>
            <th>Destacado</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          
        <?php
          $consulta = $con->query("SELECT * FROM `producto` where nombre like '%$busqueda%' or codigo like '$busqueda'"); 
          while($row = mysqli_fetch_assoc($consulta)) { ?>
          <tr>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Stock']; ?></td>
            <td>$<?php echo $row['Precio']; ?></td>
            <td><?php echo $row['tipo_iva']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['destacado']; ?></td>
            <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
            <td>
            
              <a href="edit.php?Codigo=<?php echo $row['codigo']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
                <a href="delete_producto.php?Codigo=<?php echo $row['codigo']?>" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php  include('includes/footer.php'); ?>
</body>
</html>

