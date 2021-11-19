<?php include("db.php"); 
session_start();
				
	
				if (isset($_SESSION["usuario"])) {
				if (isset($_POST['cliente_info'])) {
				$query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuario]'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) == 1) {
  				$row = mysqli_fetch_array($result);
    			$ci = $row['CI'];	
  			}
  				$id_Cliente = $ci;
  				$depa = $_POST['departamento'];
  				$ciudad = $_POST['Ciudad'];
  				$calle = $_POST['Calle'];
  				$num = $_POST['numero'];
  				$tel = $_POST['telefono'];
  				$rut = $_POST['rut'];
  				$retiro = $_POST['check2'];
  				if (empty($retiro)) {
  					header('Location: cliente.php');
  				}

  				$consulta = "INSERT INTO cliente (idU, Departamento, Ciudad, Calle, numero, rut , telefono ) VALUES ('$ci','$depa','$ciudad', '$calle', '$num', '$rut', '$tel')";
					$resultado = mysqli_query($con, $consulta);
					
				} }elseif (isset($_SESSION["usuarioCRUD"])) {
				if (isset($_POST['cliente_info'])) {
				$query = "SELECT * FROM usuario WHERE Email = '$_SESSION[usuarioCRUD]'";
  			$result = mysqli_query($con, $query);
  			if (mysqli_num_rows($result) == 1) {
  				$row = mysqli_fetch_array($result);
    			$ci = $row['CI'];	
  			}
  				$id_Cliente = $ci;
  				$depa = $_POST['departamento'];
  				$ciudad = $_POST['Ciudad'];
  				$calle = $_POST['Calle'];
  				$num = $_POST['numero'];
  				$tel = $_POST['telefono'];
  				$rut = $_POST['rut'];
  				$retiro = $_POST['check2'];
  				

  				$consulta = "INSERT INTO cliente (idU, Departamento, Ciudad, Calle, numero, rut , telefono ) VALUES ('$ci','$depa','$ciudad', '$calle', '$num', '$rut', '$tel')";
					$resultado = mysqli_query($con, $consulta);
					/*header('Location: cliente.php');*/
				} }
				$consulta = $con->query("SELECT sum(subtotal) as total FROM carrito c where c.idUsuario = '$ci' and c.estadoCarrito='1'"); 
          		while($row = mysqli_fetch_assoc($consulta)) { 
          		$total = $row['total'];
         		}
         		if (empty($retiro)) {
         		 	header("Location: cliente.php");

         		 }
         		 date_default_timezone_set("America/Argentina/Buenos_Aires");
         		 $fecha = date("y-m-d");
         		 $consulta = $con->query("SELECT * FROM carrito c where c.idProducto and c.idUsuario = '$ci' and c.estadoCarrito='1'");
        while($row = mysqli_fetch_assoc($consulta)) { 
          					$nroFactura = $row['idCarrito'];
          	  				$query = "INSERT INTO factura (idCarrito, CI) VALUES ('$nroFactura','$ci')";
  							$result = mysqli_query($con, $query); }
  						    $query = "UPDATE carrito SET estadoCarrito = '0' where idUsuario = '$ci' and estadoCarrito='1'";
  							$result = mysqli_query($con, $query); 

  							if ($retiro == '1') {
  								header('location: http://localhost/proyecto/carrito/tarjetas.php');
  							}else{
  								header('location: http://localhost/proyecto/carrito/gracias.php');
  							}
         					

				

?>

