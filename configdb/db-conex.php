<?php

			/* DEFINIR LOS DATOS: Sustituir XXXXXX por el nombre de archivo con los datos de conexión */
		
	require('db-config-mindtheblog-hol-es.php');

			/* EJECUTAR LA CONEXION */

	$phpVer = phpversion();

	if($phpVer<"5.4.33"){

			/* PHP INFERIOR A 5.4.33*/
		$runconex = mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD)
		or die(mysql_error());
		$mysqlVer = mysql_get_server_info($runconex);
		mysql_close($runconex);
	}
	else{

			/* PHP 5.4.33 Y SUPERIORES */
		$runconex = mysqli_connect( DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die (mysqli_error());
		$mysqlVer = mysqli_get_server_info($runconex);
		mysqli_close($runconex);
	}
	
	if($phpVer>="5.0.7" && $mysqlVer>="4.1.13"){
	
			/* PHP 5.0.7 Y SUPERIORES CON MYSQL SUPERIOR A 4.1.13*/
		$runconex = mysqli_connect( DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die (mysqli_error());
	}
	else{

			/* PHP INFERIOR A 5.0.7 O MYSQL INFERIOR A 4.1.13*/
		$runconex = mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD)
		or die(mysql_error());
		mysql_select_db(DB_DATABASE, $runconex);
	}
?>