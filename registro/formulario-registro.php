<!DOCTYPE HTML>
<html lang="es-ES">
	<head>
		<title>MINDTHEBLOG | Formulario de registro</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="author" content="Codecrafter Iván Agudo Díaz" />
		<meta name="description" content="Formulario de registro de MINDTHEBLOG" />
		<meta name="keywords" content="Registrate, formulario de registro, mindtheblog" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />-->
		
			<!-- HOJAS DE ESTILOS -->
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/mind-the-blog.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-menu-superior.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-fuente-sansation.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-formulario-registro.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-panovista.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-popup-login.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-popup-img-avatar.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../jquery-ui/jquery-ui.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../jquery-ui/jquery-ui.structure.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../jquery-ui/jquery-ui.theme.css" />
		
			<!-- SCRIPTS -->
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.js"></script>
		<script type="text/javascript" src="../js/js-main.js"></script>
		<script type="text/javascript" src="../js/js-popup-cookies.js"></script>
		<script type="text/javascript" src="../js/js-popup-login.js"></script>
		<script type="text/javascript" src="../js/js-popup-img-avatar.js"></script>
		<script type="text/javascript" src="../js/js-funcionamientomenu.js"></script>
		<script type="text/javascript" src="../js/js-validar-registro.js"></script>
		<script type="text/javascript" src="../js/js-panovista.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-67536467-1', 'auto');
			ga('send', 'pageview');
		</script>
		<?php
			include ('../visitas/gestor-visitas-articulos.php');
		?>
	</head>
	<body>
		<header id="cabecera">
			<div id="cabeceraPrimeraLinea">
				<div id="contenedorLogotipo1" class="logo1-visible">
					<img id="imagenLogotipo1" src="../img/MIND-THE-BLOG-LOGO.png" alt="Logo MIND THE BLOG">
				</div>
			</div>
			
			<div id="cabeceraSegundaLinea" class="cabeceraSegundaLineaEstadoUnfixed">
				<div id="contenedorLogotipo2" class="logo2-invisible">
					<img id="imagenLogotipo2" src="../img/MIND-THE-BLOG-LOGO-MINI.png" alt="Logo MIND THE BLOG">
				</div>
				<nav id="menuHorizontal" class="menuHorizontal-invisible">
					<ul id="" class="menuSecciones">
						<li>
							<a href="../index.php" title="Home">
								<img src="../img/img-menu/home.png" alt="Home">
							</a>
						</li>
						<li>
							<a href="../acercade/acercademi.php" title="Acerca de mí">
								<img src="../img/img-menu/yo2.png" alt="Acerca de mi">
							</a>
						</li>
						<li>
							<a href="../enconstruccion/en-construccion.php" title="Archivo de entradas">
								<img src="../img/img-menu/icono-documentos.png" alt="Archivo">
							</a>
						</li>
						<li>
							<a href="../index.php" title="Redes Sociales">
								<img src="../img/img-menu/redes-sociales.png" alt="Redes Sociales">
							</a>
						</li>
						<li>
							<a href="javascript:false" id="enlaceLogin" title="Accede a tu cuenta">
								<img src="../img/img-menu/login.png" alt="Icono Login">
							</a>
						</li>
					</ul>
					<ul class="migas-de-pan" itemscope itemtype="http://schema.org/BreadcrumbList" >
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" >
							<a href="../index.php" itemprop="item" ><span itemprop="name">Inicio</span></a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" >
							<a href="formulario-registro.php" itemprop="item" ><span itemprop="name">Formulario de Registro</span></a>
							<meta itemprop="position" content="2" />
						</li>
					</ul>
					<!--<ul id="" class="menuRedesSociales">
						<li>
							<a href="https://www.facebook.com/mindtheblog.es?ref=hl" target="_blank" class="imagenRedesSocialesMenu">
								<img src="../img/img-menu/icono-facebook-gris.png" alt="PERFIL FACEBOOK" onmouseover="this.src='../img/img-menu/icono-facebook-color.png'" onmouseout="this.src='../img/img-menu/icono-facebook-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/u/0/112651817735287151516/posts" target="_blank" class="imagenRedesSocialesMenu">
								<img src="../img/img-menu/icono-google-gris.png" alt="PERFIL GOOGLE+" onmouseover="this.src='../img/img-menu/icono-google-color.png'" onmouseout="this.src='../img/img-menu/icono-google-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="../index.php" target="_blank" class="imagenRedesSocialesMenu">
								<img src="../img/img-menu/icono-twitter-gris.png" alt="PERFIL TWITTER" onmouseover="this.src='../img/img-menu/icono-twitter-color.png'" onmouseout="this.src='../img/img-menu/icono-twitter-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="../index.php" target="_blank" class="imagenRedesSocialesMenu">
								<img src="../img/img-menu/icono-pinterest-gris.png" alt="PERFIL PINTEREST" onmouseover="this.src='../img/img-menu/icono-pinterest-color.png'" onmouseout="this.src='../img/img-menu/icono-pinterest-gris.png'"/>
							</a>
						</li>
					</ul>-->
				</nav>
			</div>
		</header>
		<div id="principal" class="principalEstadoUnfixed">
			<aside id="asideIzquierdo" class="asideIzquierdoEstadoUnfixed">
				<nav id="menuVertical" class="menuVerticalEstadoUnfixed">
					<!--<ul>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					<li><a href="../index.php"><img src="../img/b-inicio2.png" alt="BOTON INICIO"></a></li>
					</ul>-->
				</nav>
			</aside>
			<div id="main" class="mainEstado1">
				<section id="sectionformularioRegistro">
					<h1 id="tituloFormularioRegistro">FORMULARIO DE REGISTRO</h1>
					<p>Introduce los datos de registro a continuación para poder logearte en nuestra WEB</p>
					
					<form id="formularioRegistro" name="formularioregistro" method="post" action="validar-registro-php.php" onsubmit="return validarFormul()" enctype="multipart/form-data">
					
						<div class="form-registro-estructura-label-input">
							<label for="formRegNombreUsuario">Usuario</label>
							<input class="form-registro-estructura-input-text" type="text" id="formRegNombreUsuario" name="nombreusuario"/>
							<div id="tooltipRequerimientosNombreUsuario">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="validarNombreUsuario" class="invalid">Introduce un nombre de usuario</li>
							   </ul>
							</div>
						</div>
						
						<div class="form-registro-estructura-label-input">
							<label for="formReg1PasswordUsuario">Password</label>
							<input class="form-registro-estructura-input-text" type="password" id="formReg1PasswordUsuario" name="passwordusuario1" />
							<div id="tooltipRequerimientosPassword1">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="necesitaMinuscula" class="invalid">Una Minúscula</li>
								  <li id="necesitaMayuscula" class="invalid">Una Mayúscula</li>
								  <li id="necesitaNumero" class="invalid">Un número</li>
								  <li id="necesitaMinimoCaracteres" class="invalid">8 caracteres mínimo</li>
							   </ul>
							</div>
						</div>
						
						<div class="form-registro-estructura-label-input">
							<label for="formReg2PasswordUsuario">Password</label>
							<input class="form-registro-estructura-input-text" type="password" id="formReg2PasswordUsuario" name="passwordusuario2" />
							<div id="tooltipRequerimientosPassword2">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="coincidirPassword" class="invalid">Los Password deben coincidir</li>
							   </ul>
							</div>
						</div>
						
						<div class="form-registro-estructura-label-input">
							<label for="formRegNombre">Nombre</label>
							<input class="form-registro-estructura-input-text" type="text" id="formRegNombre" name="nombre"/>
							<div id="tooltipRequerimientosNombre">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="validarNombre" class="invalid">Escribe tu nombre</li>
							   </ul>
							</div>
						</div>
						
						<div class="form-registro-estructura-label-input">
							<label for="formRegApellido1">Apellido 1</label>
							<input class="form-registro-estructura-input-text" type="text" id="formRegApellido1" name="apellido1"/>
							<div id="tooltipRequerimientosApellido1">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="validarApellido1" class="invalid">Escribe tu primer apellido</li>
							   </ul>
							</div>
						</div>
						
						<div class="form-registro-estructura-label-input">
							<label for="formRegApellido2">Apellido 2</label>
							<input class="form-registro-estructura-input-text" type="text" id="formRegApellido2" name="apellido2"/>
							<div id="tooltipRequerimientosApellido2">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="validarApellido2" class="invalid">Escribe tu segundo apellido</li>
							   </ul>
							</div>
						</div>
						
						<div class="form-registro-estructura-label-input">
							<label for="formRegEmail">E-Mail</label>
							<input class="form-registro-estructura-input-text" type="text" id="formRegEmail" name="email"/>
							<div id="tooltipRequerimientosEmail">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="validarEmail" class="invalid">Introduce un eMail válido</li>
							   </ul>
							</div>
						</div>
						
						<div class="form-registro-estructura-label-input">
							<label for="formRegFechaNac">F. Nac</label>
							<input class="form-registro-estructura-input-text" type="date" id="formRegFechaNac" name="fechanac"/>
						</div>
						
						<div class="form-registro-estructura-label-input-radio">
							<label for="formRegSexoUsuario">Sexo</label>
							<input class="form-registro-estructura-input-radio" type="radio" name="sexo" value="Hombre"/><div>Hombre</div>
							<input class="form-registro-estructura-input-radio" type="radio" name="sexo" value="Mujer"/><div>Mujer</div>
						</div>
						
						<div class="form-registro-estructura-label-input-imagen-oculto">
							<label for="formRegAvatarUsuarioOculto">Avatar</label>
							<input class="form-registro-estructura-input-text" type="file" id="formRegAvatarUsuarioOculto" name="avatarusuariooculto"/>
							<!--<div id="tooltipRequerimientosNombreUsuario">
							   <h4>REQUERIMIENTOS:</h4>
							   <ul class="listado-requerimientos">
								  <li id="validarNombreUsuario" class="invalid">Introduce un nombre de usuario</li>
							   </ul>
							</div>-->
						</div>
						
						<div class="form-registro-estructura-label-input-imagen-visualizado">
							<div class="form-registro-estructura-seleccion-avatar" id="formRegEstSeleccionAvatar">
								<label for="formRegAvatarUsuarioVisualizado">Avatar</label>
								<input class="form-registro-estructura-input-button" id="formRegistroBotonElegirAvatar" type="button" name="botonavatar" value="Selecciona una imagen"/>
								<input class="form-registro-estructura-input-text-archivo" type="text" id="formRegAvatarUsuarioVisualizado" name="avatarusuariovisualizado"/>
								<!--<div id="tooltipRequerimientosEmail">
									<h4>REQUERIMIENTOS:</h4>
									<ul class="listado-requerimientos">
										<li id="validarEmail" class="invalid">Introduce un eMail válido</li>
									</ul>
								</div>-->
							</div>
							<div class="form-registro-estructura-previa-avatar" id="formRegEstPreviaAvatar">
								<img id="avatarVistaPrevia" src="http://www.mindtheblog.hol.es/img/img-avatar-usuarios/icono-avatar-anonimo-gris-2.png" alt="Vista Previa de tu Avatar"/>
							</div>
						</div>
						
						
						
						<div class="form-registro-estructura-label-input">
							<input class="form-registro-estructura-input-submit" id="formRegistroBotonEnviar" type="submit" name="botonregistro" value="Registrar"/>
						</div>
					</form>
					
				</section>
			</div>
			<aside id="asideDerecho" class="asideDerechoEstadoUnfixed">
				<nav id="menuVertical" class="menuVerticalEstadoUnfixed">
				</nav>
			</aside>
		</div>
		<footer id="pieDePagina" class="pieDePaginaEstadoUnfixed">
		</footer>
	</body>
</html>