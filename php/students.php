<?php 
	require("conexion.php");
	$query = "SELECT * FROM usuarios";
	$result = mysqli_query($enlace, $query);
	$table = "";
	$table = '<table id="myTable" class="table table-bordered"><tbody>';
	while($row = mysqli_fetch_array($result)) {
	  $table = $table . "<tr onclick='getExams(
	  ".json_encode($row['id']).",
	  ".json_encode($row['name']).",
	  ".json_encode($row['lastname'])."
	)'><td>". $row['name'].' '.$row['lastname']."</td></tr>";
	}
	$table = $table . "<tbody></table>";
	echo $table;
	mysqli_close($enlace);
	return($table);
?>