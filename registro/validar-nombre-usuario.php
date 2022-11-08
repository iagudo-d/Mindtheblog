<?php

$usuarioenviado = $_POST['user'];

		/* DEFINIR LOS DATOS */
		
	//include ('../configdb/db-config-localhost.php');
	include ('../configdb/db-config-mindtheblog-hol-es.php');


		/* EJECUTAR LA CONEXION */
			
	$runconex = mysqli_connect( DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die (mysqli_error());
	
	
	$consultaTablaCompleta = mysqli_query($runconex,"SELECT * FROM users WHERE usuario = '$usuarioenviado'") or die (mysqli_error());
	$numeroRegistros = mysqli_num_rows( $consultaTablaCompleta );
	
	
	/* Este será el resultado que devolverá la función mediante AJAX */
	
	if( $numeroRegistros > 0 ){
		echo "false";
	} else {
		echo "true";
	}


	mysqli_close($runconex);

?>