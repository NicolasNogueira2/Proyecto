
 <!DOCTYPE html>
 <?php include("db.php"); ?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0 ">
	<title>carrito</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
	<link rel="stylesheet" href="css\all.min.css">
	<link rel="stylesheet" type="text/css" href="css1/historial.css">
	
</head>
<body>
	<?php session_start(); ?>
	<div id="general">
	<div id="main-header">
	
		<a  href="http://localhost/proyecto/home/home.php"><img class="img" src="logoHeader.png" width="120" height="100" /></a>
		<nav>
			
	<div class="search-box" >
		<form action="buscador_producto.php" method="get" >
		<input class="search-txt" type="text" name="busqueda" placeholder="Buscar producto..." >
		
			<a class="search-btn" ><i class="fas fa-search"></i>
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
	<p>Gracias por su compra</p>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="mainHeader.js"></script>
<script src="main.js"></script>
</body>
</html>
