<?php

$emailRegistro = $_POST['formormularioRecordarLoginEmail'];
		/* DEFINIR LOS DATOS */
	
	//include ('../configdb/db-config-localhost.php');
	include ('../configdb/db-config-mindtheblog-hol-es.php');
	require_once ('../mailer/class.phpmailer.php');

		/* EJECUTAR LA CONEXION */
			
	$runconex = mysqli_connect( DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die (mysqli_error());
	
	$consultaTablaCompleta = mysqli_query($runconex,"SELECT * FROM users WHERE email = '$emailRegistro' ");
	$numeroRegistros = mysqli_num_rows( $consultaTablaCompleta );
	$datosRegistro = mysqli_fetch_assoc($consultaTablaCompleta);
	$nombreUsuario = $datosRegistro['usuario'];
	$passwordUsuario = $datosRegistro['password'];
	$nombre = $datosRegistro['nombre'];
	$apellido1 = $datosRegistro['apellido1'];
	$sexoUsuario = $datosRegistro['sexo'];
	
	if($sexoUsuario == "H"){
		$saludo = "Estimado ";
	}else{
		$saludo = "Estimada ";
	};
	
	
	$subject = "MINDTHEBLOG datos de alta";
	$body = '<!DOCTYPE HTML>
<html>
	<head>
		<title>Recuperación de credenciales</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body style="margin:0;padding:0;">
		<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#dddddd">
			<tr>
				<td>
					<table align="center" border="1" cellpadding="0" cellspacing="0" width="600" bgcolor="#dddddd" background="http://www.mindtheblog.hol.es/img/img-varias/papiro2.png" style="border-collapse:collapse; background-repeat:no-repeat; background-size:600px;" >
						<tr height="200px">
							<td align="center"><img src="http://www.mindtheblog.hol.es/img/MIND-THE-BLOG-LOGO.png" alt="Logo MINDTHEBLOG" style="margin:40px 0px 0px 0px;"/></td>
						</tr>
						<tr height="400px" style="font-family:Poetsen One;font-size:20px;color:#222222;">
							<td>
								<p style="margin:20px 70px 20px 70px;">'.$saludo.' '.$nombre.' '.$apellido1.'</p>
								<p style="margin:20px 70px 20px 70px;">Hemos recibido una solicitud de recuperación de credenciales para acceder a www.mindtheblog.hol.es, en respuesta a la solicitud, le enviamos las claves con las que se registró.</p>
								<p style="margin:20px 70px 20px 70px;">Los datos de registro son:</p>
								<p style="margin:20px 70px 20px 70px;">Nombre de usuario: '.$nombreUsuario.'</p>
								<p style="margin:20px 70px 20px 70px;">Password: '.$passwordUsuario.'</p>
								<p style="margin:20px 70px 20px 70px;">Si usted no ha solicitado dichos datos, es posible que se este tratando de usurpar su identidad en MINDTHEBLOG, por este motivo rogamos que se ponga en contacto con nosotros enviando un correo a la dirección xxxx@xxxx.xxx para evitar que se vea afectado de cualquier practica ilegal.</p>
								<p style="margin:20px 70px 20px 70px;">Aprovechamos la ocasión para saludarle.</p>
								<p style="margin:20px 70px 20px 70px;">Atentamente.</p>
								<p style="margin:20px 70px 20px 70px;">El equipo de MINDTHEBLOG.</p>
							</td>
						</tr>
						<tr height="100px">
							<td><p>Row 3</p></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>';
	
	
	$mail = new PHPMailer();
	
	$mail->setFrom('administracion@mindtheblog.hol.es', 'MINDTHEBLOG');
	$mail->addReplyTo('administracion@mindtheblog.hol.es', 'MINDTHEBLOG');
	$mail->addAddress($emailRegistro, $nombreUsuario);
	$mail->Subject = $subject;
	$mail->msgHTML($body);
	$mail->addAttachment("../img/img-varias/papiro2.png");
	$mail->addAttachment("../css/poetsenone/PoetsenOne-Regular.ttf");
	$mail->isHTML(true);
	$mail->CharSet = "UTF-8";
	$mail->Encoding = "base64";
	var_dump($mail);
	
	if(!$mail->Send()) {
echo "Error al enviar el mensaje: " . $mail->ErrorInfo;
} else {
echo "Mensaje enviado!!";
}

	mysqli_close($runconex);

?>