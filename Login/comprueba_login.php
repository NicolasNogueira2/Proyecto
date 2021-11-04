<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	try {
		$base=new PDO("mysql:host=localhost; dbname=proyecto", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM USUARIO WHERE Email= :login AND contra= :contra";
		$resultado=$base->prepare($sql);
		$login=htmlentities(addslashes($_POST["login"]));
		$contra=htmlentities(addslashes($_POST["contra"]));
		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":contra", $contra);
		$resultado->execute();
		$numero_registro=$resultado->rowCount();
		if($numero_registro!=0){
			session_start();
			$_SESSION["usuario"]=$_POST["login"];
			header("Location: http://localhost/proyecto/home/home.php");

		}else{	
			header("Location:login.php");
		}



		
	} catch (Exception $e) {
		die ("Error: " . $e->getMessage());



		
	}

?>	
	
</body>
</html>