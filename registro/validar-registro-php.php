<?php

$usuario = $_POST['nombreusuario'];
$password = $_POST['passwordusuario1'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$fechanac = $_POST['fechanac'];
$sexo = $_POST['sexo'];
$fechaActual = getdate();
$idUnico = $_POST['nombreusuario'].$fechaActual['seconds'].$fechaActual['minutes'].$fechaActual['hours'].$fechaActual['mday'].$fechaActual['wday'].$fechaActual['mon'].$fechaActual['year'].$fechaActual['yday'];


$imgAvatar = $_FILES['avatarusuariooculto'];
$imgAvatarName = $imgAvatar['name'];
$imgAvatarType = $imgAvatar['type'];
$imgAvatarTempName = $imgAvatar['tmp_name'];

$rutatemporal = "../img/img-avatar-usuarios/temp/";
$rutatemporal = $rutatemporal . basename( $imgAvatarName);

if(move_uploaded_file($imgAvatarTempName, $rutatemporal)){
	echo "El archivo ". basename( $imgAvatarName ). " ha sido subido";
}else{
	echo "Ha ocurrido un error, trate de nuevo!";
}

var_dump($imgAvatar);
		
		/* DEFINIR LOS DATOS */
	
	//include ('../configdb/db-config-localhost.php');
	include ('../configdb/db-config-mindtheblog-hol-es.php');

			/* EJECUTAR LA CONEXION */
			
	$runconex = mysqli_connect( DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die (mysqli_error());
	
	mysqli_query($runconex,"INSERT INTO users (id_unico,usuario,password,nombre,apellido1,apellido2,email,fechanac,sexo,fecha_registro,img_avatar) VALUES ('$idUnico','$usuario','$password','$nombre','$apellido1','$apellido2','$email','$fechanac','$sexo','$fechaActual','$imgAvatarName')");
	
	mysqli_close($runconex);
	
	
	//header('Location: http://www.mindtheblog.hol.es');	
	//header('Location: http://localhost/Pruebas/MIND%20THE%20BLOG/index.php');

?>