<?php
	require('conexion.php');
	
	$id = $_POST['id'];
	$query = "SELECT * FROM tests WHERE id = '".$id."'";
	$resultado = mysqli_query($enlace, $query);
	$row = mysqli_fetch_array($resultado);

	$table="";

	switch ($row['name']) {
		case 'Ortografía 1ER TRIMESTRE EVALUACIÓN INICIAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>El lugar de la basura está en el...</td>
			        	<td>bote</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿Cuál es la forma correcta?</td>
			        	<td>¡échale ganas!</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>¿Cuál es la palabra correcta?</td>
			        	<td>Extranjero</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>¿Que palabra está mal escrita?</td>
			        	<td>Automóbil</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿Cuál de las siguientes palabras están mal escritas?
						Xochimilco 2Xilófono 3 Anexo
						</td>
			        	<td>ninguna</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>¿Cuál es la forma correcta de escribir CONE_ION?</td>
			        	<td>conexión</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>¿Cuáles palabras están escritas correctamente?</td>
			        	<td>garantizar, forzado, cerveza.</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>Todos los plurales terminan con la letra….</td>
			        	<td>S</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>Selecciona la palabra correcta </td>
			        	<td>Divino</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>¿Cuál de las siguientes oraciones lleva el punto y coma correctamente?</td>
			        	<td>"Me gusta la pizza; a Carlos también le gusta la pizza."</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;
		
		default:
		break;
	}


	echo '<div class="modal-dialog" role="document">
    <div class="modal-content">
     	<div class="modal-header">
	        <h5 class="modal-title">'.$row['name'].'</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
	      <div class="modal-body">
	      '.$table.'
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	      </div>
    	</div>
  	</div>';
?>