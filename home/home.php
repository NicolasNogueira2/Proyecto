<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0 ">
	<title>home</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
	<link rel="stylesheet" href="css1\cssmain.css">
	<link rel="stylesheet" href="css\all.min.css">
</head>
<body>
	<div id="general">
	<div id="main-header">
	<!--<header id="main-header">-->
		<a  href="http://localhost/proyecto/home/home.php"><img class="img" src="logoHeader.png" width="120" height="100" /></a>
		<nav>
	<div class="search-box">
		<input class="search-txt" type="text" name="" placeholder="Buscar producto..............">
		<a class="search-btn" href="">
			<i class="fas fa-search"></i>
		</a>
		<!--<div class="search-btn">
			<i class="fas fa-search"></i>
		</div>-->

		
	</div>

			<ul>
				<li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
				<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
				<li><a href="http://localhost/proyecto/Login/Login.php"><i class="fas fa-sign-in-alt"></i></a></li>
				
			</ul>
		</nav>

	</div>
	<div class="contenedor-menu">
	<ul class="menu">
		<li class="titulo">CATEGORIAS</li>
		<li><a href="#"><i class="icono izquierda	fas fa-keyboard"></i> Teclado <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselTecR.php">Razer</a></li>
				<li><a href="catsel/catselTecL.html">Logitech</a></li>
				<li><a href="catsel/catselTecH.html">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-mouse"></i> Mouse  <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>

				<li><a href="catsel/catselMouR.html">Razer</a></li>
				<li><a href="catsel/catselMouL.html">Logitech</a></li>
				<li><a href="catsel/catselMouH.html">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-headphones-alt"></i> Auricular <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="catsel/catselAuriR.html">Razer</a></li>
				<li><a href="catsel/catselAuriL.html">Logitech</a></li>
				<li><a href="catsel/catselAuriH.html">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-tablet"></i> Mousepad <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="catsel/catselMoupR.html">Razer</a></li>
				<li><a href="catsel/catselMoupL.html">Logitech</a></li>
				<li><a href="catsel/catselMoupH.html">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-tv"></i> Pantalla <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="catsel/catselMonA.html">Acer</a></li>
				<li><a href="catsel/catselMonV.html">ViewSonic</a></li>
				<li><a href="catsel/catselMonAsus.html">Asus</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda fas fa-vr-cardboard"></i> Tarjetas de video <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="catsel/catselGrafN.html">Nvidia</a></li>
				<li><a href="catsel/catselGrafAMD.html">AMD</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-microchip"></i> Procesador <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="catsel/catselProcI.html">Intel</a></li>
				<li><a href="catsel/catselProcA.html">AMD</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-memory"></i> Memorias <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="catsel/catselMemC.html">Corsair</a></li>
				<li><a href="catsel/catselMemL.html">Logitech</a></li>
				<li><a href="catsel/catselMemA.html">ADATA</a></li>
			</ul>
		</li>

	</ul>

</div>
<div id="prod">
		<?php
	include("db.php");
			$query = "Select * from producto";
			$resultado = $con->query($query);
			while ($row = $resultado->fetch_assoc()) {
				?>
				
				<div>


				</div>

				 
				<?php 
			}
	 ?>

</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="main.js"></script>
</body>
</html>