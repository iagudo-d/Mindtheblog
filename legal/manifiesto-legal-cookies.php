<!DOCTYPE HTML>
<html lang="es-ES">
	<head>
		<title>MINDTHEBLOG | Manifiesto legal sobre las cookies</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="author" content="Codecrafter Iván Agudo Díaz" />
		<meta name="description" content="Manifiesto legal sobre las cookies que usamos en MINDTHEBLOG e información adicional referente a ellas que puede serle de ayuda." />
		<meta name="keywords" content="MINDTHEBLOG, cookies, manifiesto, manifest, politica de cookies, información legal." />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />-->
		
			<!-- HOJAS DE ESTILOS -->
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/mind-the-blog.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-menu-superior.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-fuente-sansation.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-comentarios.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-panovista.css" />
		<link id="hojaest" rel="stylesheet" type="text/css" href="../css/css-popup-login.css" />
		
			<!-- SCRIPTS -->
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.js"></script>
		<script type="text/javascript" src="../js/js-main.js"></script>
		<script type="text/javascript" src="../js/js-popup-cookies.js"></script>
		<script type="text/javascript" src="../js/js-popup-login.js"></script>
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
							<a href="acercademi.php" itemprop="item" ><span itemprop="name">Manifiesto sobre la política de cookies.</span></a>
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
						<div class="titular-articulo">
							<h1>POLITICA DE COOKIES</h1>
						</div>
						<p>Si estas visualizando este contenido, es que has decidido saber más sobre la politica de cookies de MINDTHEBLOG, a continuación te explicamos cual es nuestra política de Cookies, queremos dejar claro que no solamente lo hacemos para cumplir con las normativas legales vigentes, si no para informarte de el proposito de dichas Galletitas y que puedas actuar en consecuencia, no solo en nuestro sitio web.</p>
						<p>Una Cookie es un pequeño trozo de información que se almacena en el navegador, en la mayoria de los sitios en los que me he documentado, dicen de ellas que son inofensivas y que no pueden almacenar información sensible o de caracter personal, pues amigos, eso no es del todo correcto, si bien no se suele almacenar información personal es cierto que se puede, nosotros simplemente no lo hacemos.</p>
						<p>Otra de las cosas que debes saber, es que de forma predeterminada, la mayoría de los navegadores las aceptan. Al final del documento te dejamos unos enlaces para evitar esto.</p>
						<p>Las cookies nos permiten reconocerte, analizar los hábitos de navegación para ofrecete una experiencia mejor en tus visitas y en muchos sitios para ofrecerte publicidad de productos que pudieran ser de tu interés, estre otras cosas, pero estos suelen ser los motivos mas extendidos para usar las denominadas galletitas.</p>
						<p>¿Qué tipos de cookies utiliza esta página web?</p>
						<p>- Cookies técnicas: Son aquéllas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.</p>
						<p>- Cookies de personalización: Son aquéllas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.</p>
						<p>- Cookies de análisis: Son aquéllas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</p>
						<p>- Cookies publicitarias: Son aquéllas que, bien tratadas por nosotros o por terceros, nos permiten gestionar de la forma más eficaz posible la oferta de los espacios publicitarios que hay en la página web, adecuando el contenido del anuncio al contenido del servicio solicitado o al uso que realice de nuestra página web. Para ello podemos analizar sus hábitos de navegación en Internet y podemos mostrarle publicidad relacionada con su perfil de navegación.</p>
						<p>- Cookies de publicidad comportamental: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo.</p>
						<p>Cookies de terceros: La Web de XXXXX puede utilizar servicios de terceros que, por cuenta de XXXXX, recopilaran información con fines estadísticos, de uso del Site por parte del usuario y para la prestacion de otros servicios relacionados con la actividad del Website y otros servicios de Internet.</p>
						<p>En particular, este sitio Web utiliza Google Analytics, un servicio analítico de web prestado por Google, Inc. con domicilio en los Estados Unidos con sede central en 1600 Amphitheatre Parkway, Mountain View, California 94043.  Para la prestación de estos servicios, estos utilizan cookies que recopilan la información, incluida la dirección IP del usuario, que será transmitida, tratada y almacenada por Google en los términos fijados en la Web Google.com. Incluyendo la posible transmisión de dicha información a terceros por razones de exigencia legal o cuando dichos terceros procesen la información por cuenta de Google.</p>
						<p>El Usuario acepta expresamente, por la utilización de este Site, el tratamiento de la información recabada en la forma y con los fines anteriormente mencionados. Y asimismo reconoce conocer la posibilidad de rechazar el tratamiento de tales datos o información rechazando el uso de Cookies mediante la selección de la configuración apropiada a tal fin en su navegador. Si bien esta opción de bloqueo de Cookies en su navegador puede no permitirle el uso pleno de todas las funcionalidades del Website.</p>
						<p>Recordarte que comoantes señalamos, puedes bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en tu ordenador:</p>
						<p>Chrome</p>
						<p>Explorer</p>
						<p>Firefox</p>
						<p>Safari</p>
						<p>Si tiene dudas sobre esta política de cookies, puede contactar con el equipo de MINDTHEBLOG en mindtheblog@outlook.es</p>
					</article>
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