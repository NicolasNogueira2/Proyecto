 <!DOCTYPE html>
 <?php include("db.php"); ?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0 ">
	<title>carrito</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
	<link rel="stylesheet" href="css\all.min.css">
	<link rel="stylesheet" type="text/css" href="css1/csscliente.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	
</head>
<body>
	<?php session_start(); ?>
	<div id="general">
	<div id="main-header">
	
		<a  href="http://localhost/proyecto/home/home.php"><img class="img" src="logoHeader.png" width="120" height="100" /></a>
		<nav>
			
	<div class="buscar" >
		<form action="buscador_producto.php" method="get" >
		<input class="escribir-texto" type="text" name="busqueda" placeholder="Buscar producto..." >
		
			<a class="buscar-boton" ><i class="fas fa-search"></i>
		</a>
		</form>
		
	</div>

			<ul>
				<li><a href="http://localhost/proyecto/ubicacion/ubicacion.php"><i class="fas fa-map-marker-alt"></i></a></li>
				<li><a href="http://localhost/proyecto/carrito/carrito.php"><i class="fas fa-shopping-cart"></i></a></li>
				<li><a href="http://localhost/proyecto/Login/login.php"><i class="fas fa-sign-in-alt"></i></a></li>
			</ul>
		</nav>

	</div>
	
<div id="prod">
	
	<div class="producto">
		<?php 

		if (isset($_SESSION["usuario"])) { ?>
		<div class="formulario">	
				<form action="validacion_cliente.php" method="POST">
					<input class="inp" type="text" name="departamento" placeholder="Departamento" required><br>
					<input class="in" type="text" name="Ciudad" placeholder="Ciudad" required><br>	</p>
					<input class="in" type="text" name="Calle" placeholder="Calle o direccion" required><br>	</p>
					<input class="in" type="text" name="numero" placeholder="numero de casa" required><br>	</p>
					<input class="in" type="text" name="telefono" placeholder="ej: 98 555 444" required><br></p>
					<input class="in" type="int" name="rut" placeholder="RUT (opcional)" ><br></p>
					
					
				
				
		</div>



		<div class="formulario2">
			<div id="content">
		<table class="table table-bordered">
        <thead>
          <tr>
          	<th>Producto</th>
            <th>SubTotal</th>
        </tr>
        </thead>
        <tbody>
        	<?php
        $query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuario]'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) == 1) {
  				$row = mysqli_fetch_array($result);
    			$ci = $row['CI'];
  			}	
          $consulta = $con->query("SELECT * FROM producto p, carrito c where p.codigo = c.idProducto and c.idUsuario = '$ci' and c.estadoCarrito='1'"); 
          while($row = mysqli_fetch_assoc($consulta)) {
          	$Nombre = $row['Nombre']; ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td>US$<?php echo $row['subTotal']; ?></td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table><?php
            $consulta = $con->query("SELECT sum(subtotal) as total FROM carrito c where c.idUsuario = '$ci' and c.estadoCarrito='1'"); 
          while($row = mysqli_fetch_assoc($consulta)) { 
          	$total = $row['total'];
          } ?>
          <p>Precio Total: US$<?php echo $total; ?></p>
        </div>
			<script>
				function onlyOned(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
			</script>
			<script>
				function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check2')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
			</script>
			<div>
				
				<?php $retiro= ''; ?>
				<?php $pago= ''; ?>
			</div>
			<div id="retiro">
			<label id="input"> 
			<input type="checkbox" name="check2" value="local" onclick="onlyOne(this)">Retirar en el local<br></label>
			<label id="input">
			<input type="checkbox" name="check2" value="envio" onclick="onlyOne(this)">Envio a tu direccion<br></label>
			</div>
			<div id="pago">	

			<label id="input">
			<input type="checkbox"  name="check" value="tarjeta" onclick="onlyOned(this)">Tarjeta de Credito/Debito<br></label>
		
			<label id="input" >
			<input type="checkbox" name="check" value="pagarlocal" onclick="onlyOned(this)">Pagar en el local<br></label>
			</div>


		</div>



		<input class="submit" type="submit" name="cliente_info" value="Finalizar Compra">
	</form>
		<?php }elseif (isset($_SESSION["usuarioCRUD"])) { ?>
		
		<div class="formulario">

				<form action="validacion_cliente.php" method="POST">
					<input class="inp" type="text" name="departamento" placeholder="Departamento" required><br>
					<input class="in" type="text" name="Ciudad" placeholder="Ciudad" required><br>	</p>
					<input class="in" type="text" name="Calle" placeholder="Calle o direccion" required><br>	</p>
					<input class="in" type="text" name="numero" placeholder="numero de casa" required><br>	</p>
					<input class="in" type="text" name="telefono" placeholder="ej: 98 555 444" required><br></p>
					<input class="in" type="int" name="rut" placeholder="RUT (opcional)" ><br></p>
					
					
				
				
		</div>



		<div class="formulario2">
			<div id="content">
		<table class="table table-bordered">
        <thead>
          <tr>
          	<th>Producto</th>
            <th>SubTotal</th>
        </tr>
        </thead>
        <tbody>
        	<?php
        $query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuarioCRUD]'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) == 1) {
  				$row = mysqli_fetch_array($result);
    			$ci = $row['CI'];
  			}	
          $consulta = $con->query("SELECT * FROM producto p, carrito c where p.codigo = c.idProducto and c.idUsuario = '$ci' and c.estadoCarrito='1'"); 
          while($row = mysqli_fetch_assoc($consulta)) {
          	$Nombre = $row['Nombre']; ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td>US$<?php echo $row['subTotal']; ?></td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table><?php
            $consulta = $con->query("SELECT sum(subtotal) as total FROM carrito c where c.idUsuario = '$ci' and c.estadoCarrito='1'"); 
          		while($row = mysqli_fetch_assoc($consulta)) { 
          		$total1 = $row['total'];
         		} ?>
          <p>Precio Total: US$<?php echo $total1; ?></p>
        </div>
			<script>
				function onlyOned(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
			</script>
			<script>
				function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check2')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
			</script>
			<div>
				
			</div>
			<div id="retiro">
			<label id="input"> 
			<input type="checkbox" name="check2" value="1" onclick="onlyOne(this)">Retirar en el local<br></label>
			<label id="input">
			<input type="checkbox" name="check2" value="0" onclick="onlyOne(this)">Envio a tu direccion<br></label>
			</div>
			<div id="pago">	

			<label id="input">
			<input type="checkbox"  name="check" value="1" onclick="onlyOned(this)">Tarjeta de Credito/Debito<br></label>
		
			<label id="input" >
			<input type="checkbox" name="check" value="0" onclick="onlyOned(this)">Pagar en el local<br></label>
			</div>


		</div>



		<input class="submit" type="submit" name="cliente_info" value="Finalizar Compra">
	</form>
		<?php } ?>
	
	</div>
	
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="mainHeader.js"></script>
<script src="main.js"></script>
</body>
</html>