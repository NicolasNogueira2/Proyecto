 <!DOCTYPE html>
<html xmlns="http://w3.org/1999/xhtml">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
<link rel="stylesheet" href="css1/csscat.css">
	<link rel="stylesheet" href="css\all.min.css">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Login</title>
</head>
<body>
	<?php session_start();  ?>
	<div id="general">
	<div id="main-header">
	<!--<header id="main-header">-->
		<a  href="http://localhost/proyecto/home/home.php"><img class="img" src="logoHeader.png" width="120" height="100" /></a>
		<nav>
	<div class="search-box">
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
				<li><a href="http://localhost/proyecto/home/catsel/catselProcAMD.php">AMD</a></li>
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
	<?php 
	if(!isset($_SESSION["usuario"]) and !isset($_SESSION["usuarioCRUD"])){
		?>	
		<form action="comprueba_login.php" method="post">
		<header><label for="user"><p>INICIAR SESION</p></label></header>		
			<table>

					<tr class="tdemail"><td class="izq"></td><td class="arriba"><label for="user"><i class="fas fa-user-alt"></i></label>
						<input class="entrada" type="text" name="login" placeholder="Email" id="user"></td></tr>
					<tr class="tdcontra"><td class="izq"></td><td class="abajo"><label for="con"><i class="fas fa-key"></label></i>
						<input class="entrada" type="password" name="contra" placeholder="Contraseña" id="con"></td></tr>
					<tr><td colspan="2">
						<input class="btn_submit" type="submit" name="enviar" value="Iniciar sesion"></td>
					<tr><td colspan="2"><a href="http://localhost/proyecto/Login/index.php">
						<input class="btn_submit" type="button" name="registrarse" value="Registrarse"></a></td>
				</tr>
			</table>
	</form>
	
	<?php } elseif (isset($_SESSION["usuario"])){
		?>
		<div id="logueado">
			<div id="contenido4">
		<header><?php echo "Hola: " . "<br>" . $_SESSION["usuario"] . "<br><br>";?></header>
		<p id="leave"><a href="cierre.php"><i class="fas fa-sign-out-alt"></i> <h1>Cerrar Sesion</h1></a></p>
		</div>
			</div>	
		<?php
	} elseif (isset($_SESSION["usuarioCRUD"])) { ?>
		<div id="logueado">
			<div id="contenido4">
		<?php
		echo "Hola: " . "<br>" . $_SESSION["usuarioCRUD"] . "<br><br>";
		?>
		<div id="arriba1"><a href="http://localhost/proyecto/CRUD2.0/index.php"><i class="fas fa-sliders-h" id="iCrud"></i>CRUD</a></div><br>
		<div id="abajo1"><a href="cierre.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></div>
		</div>
			</div>
    <?php } ?>
	</div>
		

	
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="mainHeader.js"></script>
<script src="main.js"></script>

</body>
</html>
