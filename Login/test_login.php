<?php 
include('db.php');

if (isset($_POST['comprueba_login'])) {
	$email= $_POST['login'];
	$contra= $_POST['contra'];
	
  	$query = $con->query("SELECT * FROM usuario where email= :login AND contra= :contra");

	while ($row = $query->fetch_assoc()) {
  	$tipo_user = $row['tipo_user'];		
  	
   	
  	if ($email = 1) {
  		session_start();
		$_SESSION["usuario"]=$_POST["login"];
		header("Location: http://localhost/proyecto/home/home.php");
  	}elseif ($tipo_user == 2) {
  		session_start();
		$_SESSION["usuarioCRUD"]=$_POST["login"];
		header("Location: http://localhost/proyecto/home/home.php");
  	}else{
  		echo "error";
  	} } 
	

}

	


 ?>