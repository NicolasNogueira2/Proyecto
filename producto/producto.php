 <?php
include("db.php");

$Nombre = '';
$Descripcion= '';
$Codigo= '';
$Stock= '';
$Precio= '';
$imagen= '';

if  (isset($_GET['Codigo'])) {
  $id = $_GET['Codigo'];
  $query = "SELECT * FROM producto WHERE Codigo=$id";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Descripcion = $row['Descripcion'];
    $Stock = $row['Stock'];
    $Precio = $row['Precio'];
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0 ">
	<title>Producto</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap">
	<link rel="stylesheet" href="css1\cssmain.css">
	<link rel="stylesheet" href="css\all.min.css">
</head>
<body>
	<?php session_start() ?>
	<div id="general">
	<div id="main-header">
	<!--<header id="main-header">-->
		<a  href="http://localhost/proyecto/home/home.php"><img class="img" src="logoHeader.png" width="120" height="100" /></a>
		<nav>
	<div class="search-box" >
			<form action="buscador_producto.php" method="get">
			<input class="search-txt" type="text" name="busqueda" placeholder="Buscar producto...">
				<a class="search-btn" ><i class="fas fa-search"></i></a>
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
				
		<div id="foto">
            <img id="zoom" height="400px", width="400" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
        </div>
        <div id="info">

        <h1 id="precio">$<?php echo  $Precio; ?></h1>
        <p id="nombre"><?php echo  $Nombre; ?></p>
        <?php if($Stock > '1'){
        	?><p id="stock">Stock: <?php echo  $Stock; ?> disponibles</p><?php
        }else if ($Stock = '1'){
        	?><p id="stock">Stock: <?php echo  $Stock; ?> disponible</p><?php
        } ?>


        <input type="checkbox" id="btn-up">
	      <label for="btn-up" class="up"><a id="carrito_btn">Añadir al carrito</a></label> 

	<div class="ventana">
		<div class="contenedor">
			<header>Ingrese Cantidad</header>
			<label for="btn-up"><i class="fas fa-times"></i></label> 
			<div class="contenido">
				<?php 
				if(!isset($_SESSION["usuario"])){
					?><div id="loguearse">
			<li><p>¿No tienes una cuenta?</p></li>
		<li><a href="http://localhost/proyecto/Login/login.php"><i class="fas fa-user-tie"></i></i> Iniciar sesion</a></li>
		<li><a href="http://localhost/proyecto/Login/index.php"><i class="fas fa-user-alt"></i> Crear una cuenta</a></li> 
		</div>
			 <?php } else { ?>
				<form method="post">
					<input type="Int" name="cantidad" value="1" > <br>
					
			<div class="fot">
				<input type="submit" name="addcarrito" value="Enviar al carrito" class="btn_submit">
				</form>
			</div>
			<?php
			include("db.php");
			if (isset($_POST['addcarrito'])) {
				  $nroFactura = $_POST['nroFactura'];
  				$cantidad = $_POST['cantidad'];
  				$subTotal = $Precio*$cantidad;
  				if ($cantidad>='1') {
  
  			
  				$query = "INSERT INTO listaproducto (Codigo, nroFactura , cantidad, subTotal) VALUES ('$id', '$nroFactura' , '$cantidad', '$subTotal')";
  				$result = mysqli_query($con, $query);
  		}
  } 
  } ?>
			</div> 
		</div>
	</div>

        </div>

        <div id="descripcion">

        <p id=""><?php echo  $Descripcion; ?></p>

        </div>  
	 




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="mainHeader.js"></script>
<script src="main.js"></script>
</body>
</html>
