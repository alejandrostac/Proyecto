<?php
	require('conexion.php');
	session_start();
	date_default_timezone_set('America/Mexico_City');
	$date = date("Y-m-d");

	$time = date("H:i:s");
	$name = $_POST['name'];
	$fine = $_POST['q1']+$_POST['q2']+$_POST['q3']+$_POST['q4']+$_POST['q5']+$_POST['q6']+$_POST['q7']+$_POST['q8']+$_POST['q9']+$_POST['q10'];
	$fail = 10 - $fine;

	$query = "INSERT INTO tests (name,date,time,correct,incorrect,id_student) VALUES ('".$name."','".$date."','".$time."','".$fine."','".$fail."','".$_SESSION["id"]."')";
	if(mysqli_query($enlace, $query)){
		header("location: ../student.html");
	}else{
		echo "no se pudo conectar a la base de datos";
	}

?>