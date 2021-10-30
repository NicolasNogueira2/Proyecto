<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
</head>
<body>
	<div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Stock</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>
          
        <?php
        include("db.php");
          $consulta = $con->query("SELECT * FROM `producto`"); 
          while($row = mysqli_fetch_assoc($consulta)) { ?>
          <tr>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Stock']; ?></td>
            <td>$<?php echo $row['Precio']; ?></td>
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
	
</body>
</html>