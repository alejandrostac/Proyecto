<?php
	require('conexion.php');
	$test= $_POST["test"];
	$level = $_POST["level"];

	if ($test == 0) {
		switch ($level) {
			case '1':
				$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 1%'";
			break;
			case '2':
				$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 2%'";
			break;
			case '3':
				$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 3%'";
			break;
			case '4':
				$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 4%'";
			break;
			case '5':
				$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 5%'";
			break;
			case '6':
				$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 6%'";
			break;
			default:
				$query = "SELECT * FROM tests";
			break;
		}
	}else{
		if ($test == 1) {
			switch ($level) {
				case '1':
					$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 1ER TRIMESTRE EVALUACIÓN INICIAL'";
				break;
				case '2':
					$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 2DO TRIMESTRE EVALUACIÓN INICIAL'";
				break;
				case '3':
					$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 3ER TRIMESTRE EVALUACIÓN INICIAL'";
				break;
				case '4':
					$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 4TO TRIMESTRE EVALUACIÓN INICIAL'";
				break;
				case '5':
					$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 5TO TRIMESTRE EVALUACIÓN INICIAL'";
				break;
				case '6':
					$query = "SELECT * FROM tests WHERE name LIKE 'Ortografía 6TO TRIMESTRE EVALUACIÓN INICIAL'";
				break;
				default:
					$query = "SELECT * FROM tests";
				break;
			}
		}else{
			switch ($level) {
				case '1':
					$query = "SELECT * FROM tests WHERE name = 'Ortografía 1ER TRIMESTRE EVALUACIÓN FINAL'";
				break;
				case '2':
					$query = "SELECT * FROM tests WHERE name = 'Ortografía 2DO TRIMESTRE EVALUACIÓN FINAL'";
				break;
				case '3':
					$query = "SELECT * FROM tests WHERE name = 'Ortografía 3ER TRIMESTRE EVALUACIÓN FINAL'";
				break;
				case '4':
					$query = "SELECT * FROM tests WHERE name = 'Ortografía 4TO TRIMESTRE EVALUACIÓN FINAL'";
				break;
				case '5':
					$query = "SELECT * FROM tests WHERE name = 'Ortografía 5TO TRIMESTRE EVALUACIÓN FINAL'";
				break;
				case '6':
					$query = "SELECT * FROM tests WHERE name = 'Ortografía 6TO TRIMESTRE EVALUACIÓN FINAL'";
				break;
				default:
					$query = "SELECT * FROM tests";
				break;
			}
		}
	}

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
			$queryname = "SELECT * FROM usuarios WHERE id = '".$row['id_student']."'";
			$resultName = mysqli_query($enlace, $queryname);
			$rowName = mysqli_fetch_array($resultName);
			$table = $table . "<tr>
			  	<td>". $rowName['name']."</td>
			  	<td>". $rowName['lastname']."</td>
			  	<td>". $row['name']."</td>
			  	<td>". $row['date']."</td>
			  	<td>". $row['time']."</td>
			  	<td>". $row['correct']."</td>
			  	<td>". $row['incorrect']."</td>
			</tr>";
		}
	}else{
		$table = $table . "<tr>
		  	<td>El examen solicitado aun no se ah realizado</td>
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