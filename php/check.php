<?php
	require('conexion.php');
	
	$id = $_POST['id'];
	$query = "SELECT * FROM tests WHERE id = '".$id."'";
	$resultado = mysqli_query($enlace, $query);
	$row = mysqli_fetch_array($resultado);

	$table="";

	switch ($row['name']) {
		case 'Ortografía  1ER TRIMESTRE EVALUACIÓN INICIAL':
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
		case 'Ortografía 1ER TRIMESTRE EVALUACIÓN FINAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿Qué palabra está mal escrita?</td>
			        	<td>Herbir</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿Qué palabra está escrita incorrectamente?</td>
			        	<td>dixlesia</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>Permiten alternar en los textos el empleo de una palabra con otras que dan a entender lo mismo.</td>
			        	<td>Sinónimo</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>Son herramientas para el lector con el fin de tener una mayor comprensión lectora de los textos.</td>
			        	<td>Signos de puntuación</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>Cuál de las siguientes oraciones esta escrita correctamente?</td>
			        	<td>Ayer compre una torta, helado, jugos y dulces.</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>Se utiliza para realizar una pausa larga al final de cada frase u oración.</td>
			        	<td>Punto</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>Es un signo diminuto que se coloca en la parte superior de las vocales para distinguir pronunciaciones</td>
			        	<td>Diéresis</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>¿Qué son palabras polisémicas?</td>
			        	<td>son aquellas palabras que tienen más de un significado</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>El punto, coma, Apóstrofe pertenecen a </td>
			        	<td>Signos de puntuación</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>Deberías ____ la tarea antes de enviarlo</td>
			        	<td>Revisar</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;
		case 'Ortografía 2DO TRIMESTRE EVALUACIÓN INICIAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>En mi colegio ___ una biblioteca enorme con salas de lectura.</td>
			        	<td>Hay</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿qué es un prefijo? </td>
			        	<td>Elemento gramatical que se adhiere a un término para cambiar su significado.</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>Se emplea para separar oraciones independientes que forman parte de un mismo enunciado</td>
			        	<td>El punto y coma</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>¿dónde falta una tilde?<BR>Estoy estudiando comunicacion en la universidad </td>
			        	<td>Estoy estudiando comunicacion en la universidad </td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿cuál de estas dos palabras está mal escrita?</td>
			        	<td>Expectacular</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>Permite dividir palabras al final de un renglón y formar palabras compuestas.</td>
			        	<td>Guion</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>Encabezan y cierran oraciones que expresan con énfasis un sentimiento o una percepción.</td>
			        	<td>Signos de exclamación</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras es aguda?<td>
			        	<td>Café</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿cuál es la palabra que llevan la intensidad de la voz en la penúltima sílaba?</td>
			        	<td>Graves</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras no lleva tilde?</td>
			        	<td>Contádor</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 2DO TRIMESTRE EVALUACIÓN FINAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿Qué palabra está escrita incorrectamente?</td>
			        	<td>Transtornado</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿las palabras agudas se acentúan cuando terminan en, s, o vocal?</td>
			        	<td>Cierto</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>¿cuál palabra es la palabra correcta para hacer una pregunta?</td>
			        	<td>Por qué</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>¿con cuál vocal no se puede usar la z?</td>
			        	<td>I</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿cuándo se puede utilizar la doble r?</td>
			        	<td>Cuando esta entre dos vocales</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>¿cual es la palabra correcta?</td>
			        	<td>Conciencia</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras tienen prefijo?</td>
			        	<td>Kilometro</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>¿se puede poner punto después de los signos de interrogación y exclamación?</td>
			        	<td>No</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿dónde va el punto cuando utilizamos comillas?</td>
			        	<td>Detrás de las comillas</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras es homófona?</td>
			        	<td>Valla</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 3ER TRIMESTRE EVALUACIÓN INICIAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿¿cuál de las siguientes palabras se encuentra escrita de forma correcta?</td>
			        	<td>orco</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita incorrectamente</td>
			        	<td>esplicar</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita de forma errónea:</td>
			        	<td>rehúlla</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>¿qué palabra de la siguiente lista no se encuentra escrita de forma correcta?</td>
			        	<td>intuicción</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, ¿cuál se escribe sin h?</td>
			        	<td>aliento</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras ¿cuál está escrita correctamente?</td>
			        	<td>atropellar</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita incorrectamente</td>
			        	<td>depóxito</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita incorrectamente</td>
			        	<td>extresante</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con h?</td>
			        	<td>honra</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras no existe?</td>
			        	<td>heucalipto</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 3ER TRIMESTRE EVALUACIÓN FINAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita incorrectamente</td>
			        	<td>conesión</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con ll?</td>
			        	<td>orilla</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con ll?</td>
			        	<td>abollar</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita incorrectamente</td>
			        	<td>asfisiar</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con y?</td>
			        	<td>bayeta</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se encuentra escrita de forma incorrecta?</td>
			        	<td>olograma</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con h?</td>
			        	<td>hurón</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, ¿cuál se escribe sin h?</td>
			        	<td>acecho</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras no se escribe de forma junta?</td>
			        	<td>agusto</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras está mal escrita?</td>
			        	<td>apollar</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 4TO TRIMESTRE EVALUACIÓN INICIAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se encuentra escrita de forma correcta?</td>
			        	<td>osco</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras no existe?</td>
			        	<td>amenudo</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita de forma errónea:</td>
			        	<td>enmasiyar</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita de forma errónea:</td>
			        	<td>ampoya</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se encuentra escrita de forma correcta?</td>
			        	<td>alzheimer</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con y?</td>
			        	<td>cónyuge</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita incorrectamente</td>
			        	<td>adipoxis</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita de forma errónea:</td>
			        	<td>sullo</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, ¿cuál se escribe sin h?</td>
			        	<td>Oler</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con h?</td>
			        	<td>hongo</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 4TO TRIMESTRE EVALUACIÓN FINAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se encuentra escrita de forma incorrecta?</td>
			        	<td>haro</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, ¿cuál se escribe sin h?</td>
			        	<td>error</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>Indica cuál de las siguientes palabras no se encuentra escrita correctamente:</td>
			        	<td>hórbita</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras no se escribe de forma junta?</td>
			        	<td>Atrasmano</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras está mal escrita?</td>
			        	<td>Chirimolla</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita incorrectamente</td>
			        	<td>estremo</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita de forma errónea:</td>
			        	<td>bachiyerato</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con h?</td>
			        	<td>harpía</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿cuál de las siguientes palabras se escribe con y?</td>
			        	<td>oyera</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>Indica cuál de las siguientes palabras no se encuentra escrita correctamente:</td>
			        	<td>hintuitivo</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 5TO TRIMESTRE EVALUACIÓN INICIAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>Las palabras graves se acentúan con tilde ortográfica cuando... </td>
			        	<td>Terminan en N, S o VOCAL.</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>Selecciona el homófono correcto para completar el espacio en blanco en la frase: "Mi hermano __________ venados en el bosque".</td>
			        	<td>Caza</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>Selecciona la oración que contenga un error ortográfico.</td>
			        	<td>Me voy de vacaciones ala playa.</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>Indica que signos de puntuación faltan para que se entienda correctamente la siguiente oración: "Juanita compró dulces_ Juan_ calabazas_ Pedro_ frutas_ verduras y botanas_ Julián_ absolutamente nada."</td>
			        	<td>, , , , , ; ,</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, ¿cuál se escribe con j?</td>
			        	<td>Paraje</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>¿Qué letras faltan en los espacios en blanco?: "La _í_ora mordió _ruscamente en el _razo a Julio; posi_lemente no _i_a para contarlo".</td>
			        	<td>v b b b v v</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>¿Cómo se escribe correctamente la siguiente palabra?</td>
			        	<td>Anorexia</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>¿Cuál de estas palabras tiene una C en el espacio en blanco?</td>
			        	<td>Explo_ión</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>En la oración "Anita lava la tina", el sujeto es:</td>
			        	<td>Anita</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>Cuál es la escritura correcta de la siguiente fecha?</td>
			        	<td>20 de enero de 2017</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 5TO TRIMESTRE EVALUACIÓN FINAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿Cuál de las siguientes palabras está correctamente escrita en singular?</td>
			        	<td>Memorando</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿Cuál es la escritura correcta del siguiente título de un libro?</td>
			        	<td>Ortografía actualizada</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>¿Cuál es la escritura correcta?</td>
			        	<td>El ingeniero  López fue premiado.</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>¿Cuál oración está correctamente escrita?</td>
			        	<td>Mi amiga iba contenta.</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿Cuál es la escritura correcta de la siguiente palabra?</td>
			        	<td>Subgerente</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>¿Cuál oración está correctamente escrita?</td>
			        	<td>Debo corregir la fecha.</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>¿Cuál es la escritura correcta de la siguiente palabra?</td>
			        	<td>Antirrobo</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>¿Cuál es el nombre de la letra y?</td>
			        	<td>Ye</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿Cuál es la abreviatura correcta de la palabra licenciada?</td>
			        	<td>Lic.</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>¿Cuál es la escritura correcta del acrónimo correspondiente al Ministerio de Educación?</td>
			        	<td>Mineduc</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;

		case 'Ortografía 6TO TRIMESTRE EVALUACIÓN INICIAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿Cuál es la escritura correcta en el saludo de una carta o correo electrónico?</td>
			        	<td>Estimada señora Fernández:</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>¿Cuál oración está correctamente escrita?</td>
			        	<td>No como sal ni azúcar ni café.</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>Según la tilde, ¿cuál es la escritura correcta de la siguiente palabra?</td>
			        	<td>Guion</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, encuentra la palabra escrita sin errores ortográficos:</td>
			        	<td>Acústico</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>¿Qué palabra se encuentra escrita de forma correcta?</td>
			        	<td>Cluéca</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>¿Cuál es la palabra que falta en la siguiente oración?  _______ espero que gane el curso. </td>
			        	<td>Solo</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>Según la tilde, ¿cuál de las siguientes palabras completa la siguiente oración Mi hermana ___________ alegremente por el jardín?</td>
			        	<td>Caminó</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>¿Cuál oración está correctamente escrita?</td>
			        	<td>¿Por qué vino hoy?</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿Cuál de las siguientes palabras se escribe con h?</td>
			        	<td>Harpía</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>Encuentra la palabra escrita de forma errónea:</td>
			        	<td>Tayar</td>';
			    if($row['q10']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			$table = $table . '<tbody></table>';
		break;
		case 'Ortografía 6TO TRIMESTRE EVALUACIÓN FINAL':
			$table = '<table class="table table-bordered"><tbody>';
				$table = $table . '
					<tr>
			         	<th scope="col">Pregunta</th>
			          	<th scope="col">Respuesta Correcta</th>
				        <th scope="col">Respuesta</th>
			        </tr>';
			    //Pregunta 1
			    $table = $table.'<tr>
			        	<td>¿Cuál es la escritura correcta de la siguiente palabra?</td>
			        	<td>México</td>';
			    if($row['q1']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 2
			    $table = $table.'<tr>
			        	<td>Encuentra qué palabra se encuentra escrita correctamente:</td>
			        	<td>Surf</td>';
			    if($row['q2']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 3
			    $table = $table.'<tr>
			        	<td>¿Cuál de las siguientes palabras se escribe con b?</td>
			        	<td>Cebar</td>';
			    if($row['q3']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 4
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, encuentra la palabra escrita sin errores ortográficos:</td>
			        	<td>Período</td>';
			    if($row['q4']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 5
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras ¿cuál está escrita correctamente?</td>
			        	<td>Disminuye</td>';
			    if($row['q5']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 6
			    $table = $table.'<tr>
			        	<td>Indica la palabra correcta:</td>
			        	<td>Gemelos</td>';
			    if($row['q6']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 7
			    $table = $table.'<tr>
			        	<td>¿Qué palabra de la siguiente lista se escribe con g?</td>
			        	<td>Litigio</td>';
			    if($row['q7']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 8
			    $table = $table.'<tr>
			        	<td>De la siguiente lista de palabras, ¿cuál se escribe con j?</td>
			        	<td>Ejercer</td>';
			    if($row['q8']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 9
			    $table = $table.'<tr>
			        	<td>¿Qué palabra de la siguiente lista se escribe con g?</td>
			        	<td>Negligente</td>';
			    if($row['q9']){
			    	$table = $table.'<td>Correcta</td></tr>';
			    }else{
			    	$table = $table.'<td>Incorrecta</td></tr>';
			    }

			    //Pregunta 10
			    $table = $table.'<tr>
			        	<td>Indique cuál de las siguientes palabras es la incorrecta:</td>
			        	<td>Reberso</td>';
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