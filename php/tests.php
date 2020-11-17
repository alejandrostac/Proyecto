<?php
	require('conexion.php');
	$id = $_POST["id"];
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$query = "SELECT * FROM tests WHERE id_student = '".$id."'";
	$result = mysqli_query($enlace, $query);
	$table = $table = '<table id="myTable" class="table table-bordered">
		<thead>
	        <tr>
	         	<th scope="col">Nombre</th>
	          	<th scope="col">Apellidos</th>
		        <th scope="col">Evaluación</th>
		        <th scope="col">Fecha</th>
		        <th scope="col">Hora</th>
		        <th scope="col">Aciertos</th>
		    	<th scope="col">Errores</th>
	        </tr>
	    </thead>
		<tbody>';

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)) {
		$table = $table . "<tr>
		  	<td>". $name."</td>
		  	<td>". $lastname."</td>
		  	<td>". $row['name']."</td>
		  	<td>". $row['date']."</td>
		  	<td>". $row['time']."</td>
		  	<td>". $row['correct']."</td>
		  	<td>". $row['incorrect']."</td>
		</tr>";
		}
	}else{
		$table = $table . "<tr>
		  	<td>".$name." ".$lastname." aun no realiza ningun examen</td>
		  	<td></td>
		  	<td></td>
		  	<td></td>
		  	<td></td>
		  	<td></td>
		  	<td></td>
		</tr>";
	}
	$table = $table . "<tbody></table>";
	echo $table;
	mysqli_close($enlace);
	return $table;
?>