<!DOCTYPE HTML>
<html lang="es-ES">
	<head>
		<title>MINDTHEBLOG | Un poquito sobre MINDTHEBLOG</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="author" content="Codecrafter Iván Agudo Díaz" />
		<meta name="description" content="Acerca de MINDTHEBLOG, ideas sobre mi y sobre MINDTHEBLOG, sobre quien soy y por que existe este blog y las motivaciones por las que decidí embarcarme en este proyecto personal." />
		<meta name="keywords" content="acerca de mindtheblog, mind, the, blog, pensamiento, ideas" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />-->
		
			<!-- HOJAS DE ESTILOS -->
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/mind-the-blog.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-menu-superior.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-fuente-sansation.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-comentarios.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-panovista.css" />
		
			<!-- SCRIPTS -->
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.js"></script>
		<script type="text/javascript" src="../js/js-main.js"></script>
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
							<a href="acercademi.php" title="Acerca de mí">
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
					</ul>
					<ul class="migas-de-pan" itemscope itemtype="http://schema.org/BreadcrumbList" >
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" >
							<a href="../index.php" itemprop="item" ><span itemprop="name">Inicio</span></a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" >
							<a href="acercademi.php" itemprop="item" ><span itemprop="name">Sobre mi y MINDTHEBLOG</span></a>
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
				<section>
					<article>
						<img src="../img/MIND-THE-BLOG-LOGO.png" alt="Logo MIND THE BLOG">
						<div class="titular-articulo">
							<h1>UN POQUITO DE MIND THE BLOG</h1>
						</div>
						
						<p>Hijo mío, la felicidad está hecha de pequeñas cosas:
						<br/>
						Un pequeño yate,
						<br/>
						una pequeña mansión,
						<br/>
						una pequeña fortuna...
						<br/>
						Groucho Marx (1890-1977).</p>
						<p>Es para mí un agrado, que dediquéis un tiempo de vuestra vida en leer mi blog. Tiene como propósito enseñaros... Me ofrezco a mostraros contenidos que muestran el mundo cambiante en el que nos encontramos, no solo con el interés de enseñaros lugares de interés, sino que entre todos podamos interactuar con el medio y mostrar al resto contenidos.</p>
						<p>Mi vida no es otra, que el de una persona inquieta, con ganas de aprender, al que le gusta disfrutar de las pequeñas cosas. Éste blog surgió con el deseo de compartir mis descubrimientos con los demás. </p>
					</article>
				</section>
			</div>
			<aside id="asideDerecho" class="asideDerechoEstadoUnfixed">
				<nav id="menuVertical" class="menuVerticalEstadoUnfixed">
					<form name="formValidacion" action="" method="post">
						<div class="form-validacion-estructura1"> <label for="formValidacionUsuario">USUARIO</label> </div>
						<div class="form-validacion-estructura2"> <input type="text" name="formularioNombreUsuario" id="formValidacionUsuario" value="Usuario"/> </div>
						<div class="form-validacion-estructura1"> <label for="formValidacionPassword">CONTRASEÑA</label> </div>
						<div class="form-validacion-estructura2"> <input type="password" name="formularioContraseña" id="formValidacionPassword" value="Contraseña"/> </div>
						<div class="form-validacion-estructura3"> <input type="submit" name="formularioEnviar" id="formValidacionSubmit" value="Logeame"/> </div>
						<div class="form-validacion-estructura3"> <input type="button" name="formularioRegistrar" id="formRegistroBoton" value="Registrar" onclick="iraregistronoindex()"/> </div>
					</form>
				</nav>
			</aside>
		</div>
		<footer id="pieDePagina" class="pieDePaginaEstadoUnfixed">
		</footer>
	</body>
</html>