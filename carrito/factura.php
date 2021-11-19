<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="script.js"></script>
<?php 

include("db.php");
if  (isset($_GET['CodigoFac'])) {
  $fac = $_GET['CodigoFac'];
}
$query = "SELECT * FROM factura WHERE idFactura = '$fac'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) == 1) {
  				$row = mysqli_fetch_array($result);
  				$ci = $row['CI'];
  				$idCarrito = $row['idCarrito'];
  			 }
  #		$query = "SELECT idProducto FROM carrito WHERE idPactura = '$idCarrito'";
  #			$result = mysqli_query($con, $query);
  #			if (mysqli_num_rows($result) == 1) {
  #				$row = mysqli_fetch_array($result);
 # 				$ci = $row['CI'];
#
  		#	 }	
	 $query = "SELECT * FROM carrito WHERE idCarrito = '$idCarrito'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) >= 1) {
  				$row = mysqli_fetch_array($result);
  				
  				$fecha = $row['fecha'];
  			 }
 		 $query = "SELECT * FROM cliente c, usuario u WHERE c.idU = u.CI and idU = '$ci'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) >= 1) {
  				$row = mysqli_fetch_array($result);
  				$Nombre = $row['email'];
  				$depa = $row['Departamento'];
  				$Ciudad = $row['Ciudad'];
  			 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="factura.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	<title>Factura</title>
 </head>
 <body>
 	<div id="todo">
 	<div id="facturaTotal">
 	<div id="head">
 		<div id="img">
 			<img src="logoHeader.png" alt=""><br>
 			<p id="info">LP TECNO</p><br><br><br>
 			<P id="info">Javier de Viana 575, La Paz</P><br><br><br>
 			<p>Nombre:
				<?php echo $Nombre; ?></p>
			<p>Domicilio: 
				<?php echo $depa; echo " "; echo $Ciudad; ?></p>
		</div>
		<div id="numFac">
			<p>e-FACTURA</p>
			<p>A 00000<?php echo $fac; ?></p><br><br><br><br><br>
			<p>Fecha: <?php echo $fecha; ?></p>
			
		</div>
		</div>
		<div id="factura">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Codigo</th>
					<th scope="col">Nombre</th>
					<th scope="col">Precio</th>
					<th scope="col">Cantidad</th>
					<th scope="col">SubTotal</th>
					
				</tr>
			</thead>
			<tbody>
				
					<?php $consulta = $con->query("SELECT * FROM carrito c , producto p WHERE c.idProducto = p.codigo and c.idCarrito = '$idCarrito'");
          while($row = mysqli_fetch_assoc($consulta)) { ?>
          	<tr>
					<td><?php echo $row['codigo'];?></td>
					<td><?php echo $row['Nombre'];?></td>
					<td><?php echo "US$",$row['Precio'];?></td>
					<td><?php echo $row['cantidad'];?></td>
					<td><?php echo "US$",$row['subTotal'];?></td>

					</tr>
				<?php	} ?>
				
			</tbody>
		</table>

	</div>
	<div id="PrecioTotal">

<?php  $query = "SELECT sum(subtotal) as total FROM carrito where idUsuario = '$ci' and idCarrito = '$idCarrito'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) >= 1) {
  				$row = mysqli_fetch_array($result);
  				$precioTotal = $row['total'];
  			 }?>
		<p>Subtotal tasa basica:
			<?php echo "US$ ",$precioTotal; ?></p>
			<p>IVA tasa basica:
			<?php echo "US$ ",$precioTotal*0.22; ?></p>
			<p>Precio Total:
			<?php echo "US$ ",$precioTotal+$precioTotal*0.22; ?></p>
	</div>
	</div>

<button onclick="generatePDF()">Descargar PDF</button>
</div>
 </body>
 </html>
 