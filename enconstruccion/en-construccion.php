<!DOCTYPE HTML>
<html lang="es-ES">
	<head>
		<title>MINDTHEBLOG | El archivo de entradas se encuentra bajo labores de mantenimiento.</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="author" content="Codecrafter Iván Agudo Díaz" />
		<meta name="description" content="Archivo de entradas de MINDTHEBLOG, desde esta seccion podrás acceder a todas las entradas publicadas." />
		<meta name="keywords" content="MINDTHEBLOG, mind the blog, archivo de entradas," />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />-->
		
			<!-- HOJAS DE ESTILOS -->
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/mind-the-blog.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-menu-superior.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-fuente-sansation.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-comentarios.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-mantenimiento.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-popup-login.css" />
		
			<!-- SCRIPTS -->
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.js"></script>
		<script type="text/javascript" src="../js/js-main.js"></script>
		<script type="text/javascript" src="../js/js-funcionamientomenumantenimiento.js"></script>
		<script type="text/javascript" src="../js/js-popup-cookies.js"></script>
		<script type="text/javascript" src="../js/js-popup-login.js"></script>
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
							<a href="en-construccion.php" title="Archivo de entradas">
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
		<!--<div id="principal" class="principalEstadoUnfixed">
			<div id="enConstruccionContenido">

			</div>
		</div>-->
	</body>
</html>