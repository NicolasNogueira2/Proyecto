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
  				$consulta = "INSERT INTO cliente (CI, id_Cliente , Departamento, Ciudad, Calle, numero, rut , telefono ) VALUES ('$ci', '$ci' ,'$depa','$ciudad', '$calle', '$num', '$rut', '$tel')";
					$resultado = mysqli_query($con, $consulta);
					header('Location: cliente.php');
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
  				$consulta = "INSERT INTO cliente (CI, id_Cliente , Departamento, Ciudad, Calle, numero, rut , telefono ) VALUES ('$ci', '$ci' ,'$depa','$ciudad', '$calle', '$num', '$rut', '$tel')";
					$resultado = mysqli_query($con, $consulta);
					header('Location: cliente.php');
				} }



				
				
				
?>
