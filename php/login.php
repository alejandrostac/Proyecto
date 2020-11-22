<?php
	require("conexion.php");
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['password'];
	$type = $_POST['type'];

	if($type == 0){
		$query = "SELECT * FROM usuarios WHERE user = '".$user."' AND pass = '".$pass."'";
		if($resultado = mysqli_query($enlace, $query)){
			if(mysqli_num_rows($resultado)>0){
				$row = mysqli_fetch_array($resultado);
				$_SESSION["id"] = $row["id"];
				$_SESSION["type"] = "student";
				echo "Student";
			}else{
				echo "Acceso Denegado";
			}
		}else{
			echo "No es posible conectar a la base de datos";
		}
	}else{
		$query = "SELECT * FROM teachers WHERE user = '".$user."' AND pass = '".$pass."'";
		if($resultado = mysqli_query($enlace, $query)){
			if(mysqli_num_rows($resultado)>0){
				$_SESSION["type"] = "teacher";
				echo "Teacher";
			}else{
				echo "Acceso Denegado";
			}
		}else{
			echo "No es posible conectar a la base de datos";
		}
	}
?>