<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0 ">
	<title>Razer</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
	<link rel="stylesheet" href="css\all.min.css">
	<link rel="stylesheet" type="text/css" href="csscat.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="mainHeader.js"></script>
	<script src="main.js"></script>

</head>
<body>
	<div id="general">
	<div id="main-header">
	<!--<header id="main-header">-->
		<a  href="http://localhost/proyecto/home/home.php"><img class="img" src="logoHeader.png" width="120" height="100" /></a>
		<nav>
	<div class="search-box" >
		<form action="buscador_producto.php" method="get">
		<input class="search-txt" type="text" name="busqueda" placeholder="Buscar producto..."> 
		
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
	<div class="contenedor-menu">
	<ul class="menu">
		<li class="titulo">CATEGORIAS</li>
		<li><a href="#"><i class="icono izquierda	fas fa-keyboard"></i> Teclado <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselTecR.php">Razer</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselTecL.php">Logitech</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselTecH.php">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-mouse"></i> Mouse  <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>

				<li><a href="http://localhost/proyecto/home/catsel/catselMouR.php">Razer</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselMouL.php">Logitech</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselMouH.php">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-headphones-alt"></i> Auricular <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselAuriR.php">Razer</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselAuriL.php">Logitech</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselAuriH.php">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-tablet"></i> Mousepad <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselPadR.php">Razer</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselPadL.php">Logitech</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselPadH.php">HyperX</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-tv"></i> Pantalla <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselMonA.php">Acer</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselMonAsus.php">Asus</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselMonV.php">ViewSonic</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda fas fa-vr-cardboard"></i> Tarjetas de video <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselGrafN.php">Nvidia</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselGrafAMD.php">AMD</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-microchip"></i> Procesador <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselProcI.php">Intel</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselProcA.php">AMD</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icono izquierda	fas fa-memory"></i> Memorias <i class="icono derecha	fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="http://localhost/proyecto/home/catsel/catselMemC.php">Corsair</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselMemH.php">Hyperx</a></li>
				<li><a href="http://localhost/proyecto/home/catsel/catselMemA.php">ADATA</a></li>
			</ul>
		</li>

	</ul>
	<div id="contacto">
			<p id="contact"><i class="fas fa-phone-alt"></i>	099487566</p>	
			<p id="contact"><i class="fas fa-envelope"></i> lptecto2021@gmail.com</p>
			<p id="contact"><i class="fas fa-clock"></i> L a V de 8:00 a 18:00</p>
			<p id="contact"><i class="fas fa-clock"></i> S y D de 8:00 a 14:00</p>
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.818593157692!2d-56.23499018480954!3d-34.76016228041927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a1d2e23830071f%3A0x8a40b54c632f0f11!2sEscuela%20T%C3%A9cnica%20La%20Paz%20UTU!5e0!3m2!1ses-419!2suy!4v1635041748886!5m2!1ses-419!2suy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</div>
<div id="prod">
	<div class="producto">

			<?php
			    include("db.php");
			            $query = "SELECT * FROM producto WHERE Nombre LIKE '%Procesador AMD%' and Stock > '0' and estado = 'activo' Order by Precio ASC" ;
			            $resultado = $con->query($query);

			            while ($row = $resultado->fetch_assoc()) {
			                ?>

			                <div class="card">
			                <a  href="//localhost/proyecto/producto/producto.php?Codigo=<?php echo $row['codigo']?>" id="poducto">
			                    <div class="imagen"><img height="220" width="220" border-radius="5px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
			                    </div>
			                    <div class="letras">
			                    <div class="precio">$<td><?php echo $row['Precio']; ?>	</td>
			                    </div>
			                    
			                    <div class="nombre">
			                    	<td><?php echo $row['Nombre']; ?></td>
			                    </div>
			                	</div>
			                    

			            </a>
			                </div >


			                <?php 
			            }
			     ?>
</div>
</body>
</html>