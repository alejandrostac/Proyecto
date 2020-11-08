<?php
	require("conexion.php");

	$user = $_POST['user'];
	$pass = $_POST['password'];

	$query = "SELECT * FROM usuarios WHERE user = '".$user."' AND pass = '".$pass."'";
	if($resultado = mysqli_query($enlace, $query)){
		echo "La conexión fue exitosa<br>";
		if(mysqli_num_rows($resultado)>0){
			echo "Acceso Aceptado";
		}else{
			echo "Acceso Denegado";
		}
	}else{
		echo "No es posible conectar a la base de datos";
	}
?>