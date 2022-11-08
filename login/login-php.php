<?php

$usuario = $_POST['formularioNombreUsuario'];
$password = $_POST['formularioContraseña'];
$recordarme = isset($_POST['recordarPassword']);
		
		/* DEFINIR LOS DATOS */
	
	//include ('../configdb/db-config-localhost.php');
	include ('../configdb/db-config-mindtheblog-hol-es.php');

		/* EJECUTAR LA CONEXION */
			
	$runconex = mysqli_connect( DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die (mysqli_error());
	
	$consultaTablaCompleta = mysqli_query($runconex,"SELECT * FROM users WHERE usuario = '$usuario' and password = '$password' ");
	$numeroRegistros = mysqli_num_rows( $consultaTablaCompleta );
	$datosRegistro = mysqli_fetch_assoc($consultaTablaCompleta);
	$idUnico = $datosRegistro['id_unico'];
	
	if( $numeroRegistros == 1 ){
		
		if($recordarme == 1){
			
			setcookie("rec_cookie",  $idUnico , time()+(365*24*60*60),"/");
			session_start();
			$_SESSION["newsession"]=$idUnico;
			$prueba1 = session_get_cookie_params ();
			$prueba2 = session_id();
			$prueba3 = session_cache_expire();
			$prueba4 = session_cache_limiter();
			$prueba5 = session_decode();
			$prueba6 = session_is_registered();
			$prueba7 = session_id();
			$prueba8 = session_id();
			var_dump($prueba1);
			echo $_COOKIE["PHPSESSID"]."<br/>";
			echo $prueba2."<br/>";
			echo $prueba3."<br/>";
			echo $prueba4."<br/>";
			echo $prueba5."<br/>";
			echo $prueba6."<br/>";
			echo $prueba7."<br/>";
			echo $prueba8."<br/>";
			//header('Location: http://localhost/Pruebas/MIND%20THE%20BLOG/index.php');
		}
		else{
			
			echo "crear conexion sin recordarme, solo de sesion.";
			
		}
		
	}
	else{
		
		echo "nombre de usuario y/o contraseña incorrectos";
	
	}


	mysqli_close($runconex);

?>