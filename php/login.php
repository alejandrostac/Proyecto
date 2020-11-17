<?php
	require("conexion.php");
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['password'];
	$type = $_POST['type'];

	if($type == 0){
		$query = "SELECT * FROM usuarios WHERE user = '".$user."' AND pass = '".$pass."'";
		if($resultado = mysqli_query($enlace, $query)){
			echo "La conexión fue exitosa<br>";
			if(mysqli_num_rows($resultado)>0){
				$_SESSION["type"] = "student";
				header("location: ../student.html");
			}else{
				echo "Acceso Denegado";
			}
		}else{
			echo "No es posible conectar a la base de datos";
		}
	}else{
		$query = "SELECT * FROM teachers WHERE user = '".$user."' AND pass = '".$pass."'";
		if($resultado = mysqli_query($enlace, $query)){
			echo "La conexión fue exitosa<br>";
			if(mysqli_num_rows($resultado)>0){
				$_SESSION["type"] = "teacher";
				header("location: ../teacher.html");
			}else{
				echo "Acceso Denegado";
			}
		}else{
			echo "No es posible conectar a la base de datos";
		}
	}
?>