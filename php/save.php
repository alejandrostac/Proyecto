<?php
	require('conexion.php');

	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$user = $_POST['user'];
	$pass = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$email = $_POST['email'];

	if($pass == $pass2){
		$query = "SELECT * FROM usuarios WHERE user = '".$user."'";
		if($resultado = mysqli_query($enlace, $query)){
			if(mysqli_num_rows($resultado)>0){
				echo "el usuario ya existe";
			}else{
				$query = "INSERT INTO usuarios (name,lastname,email,user,pass) VALUES ('".$name."','".$lastname."','".$email."','".$user."','".$pass."')";
				if(mysqli_query($enlace, $query)){
					echo "se creo nuevo registro";
				}else{
					echo "No es posible conectar a la base de datos";
				}
			}
		}else{
			echo "No es posible conectar a la base de datos";
		}
	}else{
		echo "la contraseñas no coinciden";	
	}
?>