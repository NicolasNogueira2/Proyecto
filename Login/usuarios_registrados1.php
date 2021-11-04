<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	session_start();
	if(!isset($_SESSION["usuario"])){
		echo "no estas registrado";
	}

?>	

	<h1>Bienvenidos usuarios</h1>
	<?php
	echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
	?>

	
	
</body>
</html>
