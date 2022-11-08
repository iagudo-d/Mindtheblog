<!DOCTYPE HTML>
<html lang="es_ES">
	<head>
		<title>MINDTHEBLOG | INDEX</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="author" content="Codecrafter Iván Agudo Díaz" />
		<meta name="description" content="Sitio WEB dedicado a las personas que quieren pensar" />
		<meta name="keywords" content="MINDTHEBLOG, mind, the, blog, pensamiento, ideas" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />-->
		
			<!-- HOJAS DE ESTILOS -->
		<link id="hojaest" rel="stylesheet" type="text/css" href="css/mind-the-blog.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="css/css-menu-superior.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="css/css-fuente-sansation.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="css/css-panovista.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="css/css-popup-login.css" />
		
			<!-- SCRIPTS -->
		<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="js/js-main.js"></script>
		<script type="text/javascript" src="js/js-popup-cookies.js"></script>
		<script type="text/javascript" src="js/js-popup-login.js"></script>
		<script type="text/javascript" src="js/js-funcionamientomenu.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/js-panovista.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-67536467-1', 'auto');
			ga('send', 'pageview');
		</script>
		
		<?php
			include ('visitas/gestor-visitas.php');
		?>
	</head>
	<body>
		<header id="cabecera">
			<div id="cabeceraPrimeraLinea">
				<div id="contenedorLogotipo1" class="logo1-visible">
					<img id="imagenLogotipo1" src="img/MIND-THE-BLOG-LOGO.png" alt="Logo MIND THE BLOG">
				</div>
			</div>
			
			<div id="cabeceraSegundaLinea" class="cabeceraSegundaLineaEstadoUnfixed">
				<div id="contenedorLogotipo2" class="logo2-invisible">
					<img id="imagenLogotipo2" src="img/MIND-THE-BLOG-LOGO-MINI.png" alt="Logo MIND THE BLOG">
				</div>
				<nav id="menuHorizontal" class="menuHorizontal-invisible">
					<ul id="" class="menuSecciones">
						<li>
							<a href="index.php" title="Home">
								<img src="img/img-menu/home.png" alt="Home">
							</a>
						</li>
						<li>
							<a href="acercade/acercademi.php" title="Acerca de mí">
								<img src="img/img-menu/yo2.png" alt="Acerca de mi">
							</a>
						</li>
						<li>
							<a href="enconstruccion/en-construccion.php" title="Archivo de entradas">
								<img src="img/img-menu/icono-documentos.png" alt="Archivo">
							</a>
						</li>
						<li>
							<a href="index.php" title="Redes Sociales">
								<img src="img/img-menu/redes-sociales.png" alt="Redes Sociales">
							</a>
						</li>
						<li>
							<a href="javascript:false" id="enlaceLogin" title="Accede a tu cuenta">
								<img src="img/img-menu/login.png" alt="Icono Login">
							</a>
						</li>
					</ul>
					<ul class="migas-de-pan" itemscope itemtype="http://schema.org/BreadcrumbList" >
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" >
							<a href="index.php" itemprop="item" ><span itemprop="name">Inicio</span></a>
							<meta itemprop="position" content="1" />
						</li>
					</ul>
					<!--<ul id="" class="menuRedesSociales">
						<li>
							<a href="https://www.facebook.com/mindtheblog.es?ref=hl" target="_blank" class="imagenRedesSocialesMenu">
								<img src="img/img-menu/icono-facebook-gris.png" alt="PERFIL FACEBOOK" onmouseover="this.src='img/img-menu/icono-facebook-color.png'" onmouseout="this.src='img/img-menu/icono-facebook-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/u/0/112651817735287151516/posts" target="_blank" class="imagenRedesSocialesMenu">
								<img src="img/img-menu/icono-google-gris.png" alt="PERFIL GOOGLE" onmouseover="this.src='img/img-menu/icono-google-color.png'" onmouseout="this.src='img/img-menu/icono-google-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="index.php" target="_blank" class="imagenRedesSocialesMenu">
								<img src="img/img-menu/icono-twitter-gris.png" alt="PERFIL TWITTER" onmouseover="this.src='img/img-menu/icono-twitter-color.png'" onmouseout="this.src='img/img-menu/icono-twitter-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="index.php" target="_blank" class="imagenRedesSocialesMenu">
								<img src="img/img-menu/icono-pinterest-gris.png" alt="PERFIL PINTEREST" onmouseover="this.src='img/img-menu/icono-pinterest-color.png'" onmouseout="this.src='img/img-menu/icono-pinterest-gris.png'"/>
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
						<div class="titular-articulo">
							<a href="articulos/articulo2.php"><h1>Experiencia negativa con un vendedor de Ebay</h1></a>
						</div>
						<div class="datos-creacion-articulo">
							<span class="tema-articulo" itemprop="about">Comercio Electronico</span>
							<span class="fecha-articulo" itemprop="datePublished">07-07-2015</span>
							<span class="autor-articulo" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name">Iván Agudo Díaz</span></span>
						</div>
						<img src="" alt=""/>
						<p>Bueno, he decidido contaros, tras unas cuantas experiencias, buenas experiencias de compra en la de sobra conocida página de subastas, (aunque últimamente mas de venta directa) Ebay, mi primera experiencia negativa con un vendedor. Así como dar a conocer una mala práctica que Ebay no erradica, lo que hace que los compradores en algunas ocasiones recibamos un voto negativo inmerecido (Mi primer voto negativo).</p>
						<p>La historia comienza como… bueno, como cabría esperar, con un cliente (ese soy yo) en busca de un artículo a través de la Red, os diré que para entender parte del trasfondo de mi queja, hay que entender las circunstancias por las cuales me decido a comprar este artículo a este vendedor y en dicho portal, como algunos de vosotros sabréis soy una persona inquieta y amante del DIY y las nuevas tecnologías, y como tal, he querido emprender un nuevo proyecto de domótica casera, que trataré de exponer en el blog en el futuro a medida que este avance. Pues bien dicho proyecto basa su funcionamiento experimental, Ojo!! Experimental por mi parte, ya sabemos todos, que hay videos y tutoriales a patadas en muchos portales dedicados a ello, en la archiconocida placa Arduino™... <a href="articulos/articulo2.php">Quiero saber más.</a></p>
					</article>
					<div class="separador-articulos"></div>
					<article>
						<div class="titular-articulo">
							<a href="articulos/articulo1.php"><h1>Paseo por el Valle de Iruelas</h1></a>
						</div>
						<div class="datos-creacion-articulo">
							<span class="tema-articulo" itemprop="about">Turismo</span>
							<span class="fecha-articulo" itemprop="datePublished">07-07-2015</span>
							<span class="autor-articulo" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name">Iván Agudo Díaz</span></span>
						</div>
						<img class="article-img" src="img/articulo1-paseo-valle-de-iruelas/panoramica-embalse-del-burguillo.jpg" alt="Panoramica del Embalse del Burguillo"/>
						<p>Aprovechando los días de descanso que proporcionan el fin de semana, hemos decidido pasarlo tranquilamente ( de forma relativa, pues menuda caminata nos hemos pegado ) en mi pueblo, probablemente muchos de vosotros lo conozcais por ser el pueblo natal de Adolfo Suárez y del que Camilo José Cela decia que era un buen sitio para veranear... mientras no hubiera dinero para ir a otro sitio, Cebreros.</p>
						<p>Además de agradables ratos de merecido descanso hemos disfrutado de un día de campo en plan semitreking por los bellos parajes del Valle de Iruelas por los pintorescos caminos a la falda del pico Cabeza la Parra (1.639m) y el cerro Casillas (1.768m), en esta zona hay varias rutas de incomparable belleza, realmente no llegamos a ascender a los picos pero si ascendimos hasta el puerto de Casillas y algo más en dirección al Castañar del Tiemblo pero tras 9 km de ascensión y con otro tanto que restaba bajar decidimos que era más que suficiente... <a href="articulos/articulo1.php">Quiero saber más.</a></p>
					</article>
					<div class="separador-articulos"></div>
				</section>
			</div>
			<aside id="asideDerecho" class="asideDerechoEstadoUnfixed">
				<nav id="menuVertical" class="menuVerticalEstadoUnfixed">
					<!--<form name="formValidacion" action="" method="post">
						<div class="form-validacion-estructura1"> <label for="formValidacionUsuario">USUARIO</label> </div>
						<div class="form-validacion-estructura2"> <input type="text" name="formularioNombreUsuario" id="formValidacionUsuario" value="Usuario"/> </div>
						<div class="form-validacion-estructura1"> <label for="formValidacionPassword">CONTRASEÑA</label> </div>
						<div class="form-validacion-estructura2"> <input type="password" name="formularioContraseña" id="formValidacionPassword" value="Contraseña"/> </div>
						<div class="form-validacion-estructura3"> <input type="submit" name="formularioEnviar" id="formValidacionSubmit" value="Logeame"/> </div>
						<div class="form-validacion-estructura3"> <input type="button" name="formularioRegistrar" id="formRegistroBoton" value="Registrar" onclick="iraregistroindex()"/> </div>
					</form>-->
				</nav>
			</aside>
		</div>
		<footer id="pieDePagina" class="pieDePaginaEstadoUnfixed">
		</footer>
	</body>
</html>