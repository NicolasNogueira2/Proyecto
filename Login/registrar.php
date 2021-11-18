<?php

include("comprueba_registrar.php");

if (isset($_POST['enviar'])) {
	if (strlen($_POST['cedula']) >= 8 && 
    	strlen($_POST['email']) >= 1 && 
		strlen($_POST['contra']) >= 1 ){
			$cedula = trim($_POST['cedula']);
			$email = trim($_POST['email']);
			$contra = trim($_POST['contra']);
			$consulta = "INSERT INTO usuario(CI, email, contra, estadoCliente) VALUES ('$cedula','$email','$contra', '0')";
			$resultado = mysqli_query($conex, $consulta);
			if ($resultado){
				?>
				<h3 class="ok">¡Te has registrado correctamente!</h3>
				<?php
			} else {
				?>
				<h3 class="bad">¡Usuario ya registrado!</h3>
				<?php
			
			} 
		}else {
				?>
				<h3 class="bad">¡por favor, complete bien los campos!</h3>
				<?php
			}
	}

	
?>