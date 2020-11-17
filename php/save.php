<?php
	require('conexion.php');

	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$user = $_POST['user'];
	$pass = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$email = $_POST['email'];
	$type = $_POST['type'];

	$return = "";

	if($type == 0){
		if($pass == $pass2){
			$query = "SELECT * FROM usuarios WHERE user = '".$user."'";
			if($resultado = mysqli_query($enlace, $query)){
				if(mysqli_num_rows($resultado)>0){
					$return = "duplicate";
				}else{
					$query = "INSERT INTO usuarios (name,lastname,email,user,pass) VALUES ('".$name."','".$lastname."','".$email."','".$user."','".$pass."')";
					if(mysqli_query($enlace, $query)){
						$return = "saved";
					}else{
						$return = "error";
					}
				}
			}else{
				$return = "error";
			}
		}else{
			$return = "pass";
		}
	}else{
		if($pass == $pass2){
			$query = "SELECT * FROM teachers WHERE user = '".$user."'";
			if($resultado = mysqli_query($enlace, $query)){
				if(mysqli_num_rows($resultado)>0){
					$return = "duplicate";
				}else{
					$query = "INSERT INTO teachers (name,lastname,email,user,pass) VALUES ('".$name."','".$lastname."','".$email."','".$user."','".$pass."')";
					if(mysqli_query($enlace, $query)){
						$return = "saved";
					}else{
						$return = "error";
					}
				}
			}else{
				$return = "error";
			}
		}else{
			$return = "pass";	
		}
	}
	echo $return;
?>