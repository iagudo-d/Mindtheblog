<!DOCTYPE HTML>
<html lang="es-ES">
	<head>
		<title>MINDTHEBLOG | Paseo por el Valle de Iruelas</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="author" content="Codecrafter Iván Agudo Díaz" />
		<meta name="description" content="MINDTHEBLOG, Artículo Paseo por el Valle de Iruelas" />
		<meta name="keywords" content="paseo, ruta, valle, de, iruelas, reserva, natural, reservas, naturales, Cebreros, El, Tiemblo" />
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
							<a href="#" itemprop="item" ><span itemprop="name">Artículos</span></a>
							<meta itemprop="position" content="2" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" >
							<a href="articulo1.php" itemprop="item" ><span itemprop="name">Paseo por el Valle de Iruelas</span></a>
							<meta itemprop="position" content="3" />
						</li>
					</ul>
					<!--<ul id="" class="menuRedesSociales">
						<li>
							<a href="https://www.facebook.com/mindtheblog.es?ref=hl" target="_blank" class="imagenRedesSocialesMenu">
								<img src="../img/img-menu/icono-facebook-gris.png" alt="PERFIL FACEBOOK" onmouseover="this.src='../img/img-menu/icono-facebook-color.png'" onmouseout="this.src='../img/img-menu/icono-facebook-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/u/0/112651817735287151516/posts" target="_blank" class="imagenRedesSocialesMenu"/>
								<img src="../img/img-menu/icono-google-gris.png" alt="PERFIL GOOGLE+" onmouseover="this.src='../img/img-menu/icono-google-color.png'" onmouseout="this.src='../img/img-menu/icono-google-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="../index.php" target="_blank" class="imagenRedesSocialesMenu"/>
								<img src="../img/img-menu/icono-twitter-gris.png" alt="PERFIL TWITTER" onmouseover="this.src='../img/img-menu/icono-twitter-color.png'" onmouseout="this.src='../img/img-menu/icono-twitter-gris.png'"/>
							</a>
						</li>
						<li>
							<a href="../index.php" target="_blank" class="imagenRedesSocialesMenu"/>
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
				<section itemscope itemtype="http://schema.org/CreativeWork">
					<article itemscope itemtype="http://schema.org/Article">
						<div class="titular-articulo">
							<h1 itemprop="headline">Paseo por el Valle de Iruelas</h1>
						</div>
						<div class="datos-creacion-articulo">
							<span class="tema-articulo" itemprop="about">Turismo</span>
							<span class="fecha-articulo" itemprop="datePublished">07-07-2015</span>
							<span class="autor-articulo" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name">Iván Agudo Díaz</span></span>
						</div>
						<img class="article-img" itemprop="image" src="../img/articulo1-paseo-valle-de-iruelas/panoramica-embalse-del-burguillo.jpg" alt="Panoramica del Embalse del Burguillo"/>
						<div class="contenedor-pano-vista">
							<img class="pano-vista-img" src="../img/articulo1-paseo-valle-de-iruelas/panoramica-embalse-del-burguillo.jpg" />
						</div>
						<p>Aprovechando los días de descanso que proporcionan el fin de semana, hemos decidido pasarlo tranquilamente ( de forma relativa, pues menuda caminata nos hemos pegado ) en mi pueblo, probablemente muchos de vosotros lo conozcais por ser el pueblo natal de Adolfo Suárez y del que Camilo José Cela decia que era un buen sitio para veranear... mientras no hubiera dinero para ir a otro sitio, Cebreros.</p>
						<p>Además de agradables ratos de merecido descanso hemos disfrutado de un día de campo en plan semitreking por los bellos parajes del Valle de Iruelas por los pintorescos caminos a la falda del pico Cabeza la Parra (1.639m) y el cerro Casillas (1.768m), en esta zona hay varias rutas de incomparable belleza, realmente no llegamos a ascender a los picos pero si ascendimos hasta el puerto de Casillas y algo más en dirección al Castañar del Tiemblo, pero tras 9 km de ascensión y con otro tanto que restaba bajar, decidimos que era más que suficiente.</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48627.67090767428!2d-4.5331523!3d40.381607400000014!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1433025255395" width="600" height="450" frameborder="0" style="border:0"></iframe>
						<p>Salimos de Cebreros temprano, tomamos la carretera AV-512 en dirección al Tiemblo para enlazar con la carretera N-403 en sentido Ávila y a los pocos kilómetros abandonarla tomando la salida del Valle de Iruelas por la carretera AV-504 aunque no está señalizada como tal.</p>
						<p><img src="../img/articulo1-paseo-valle-de-iruelas/vertedera-lateral-presa-burguillo.png" alt="Imagen de la vertedera lateral de la Presa del Pantano del Burguillo" style="width:40%;float:left;margin-right:20px;"/>Avanzamos por esta vía de estrecho e irregular firme y varias curvas de escasa visibilidad dejando a la derecha una panorámica del Embalse del Charco del Cura a los pies de El Tiemblo, y de frente la visión del pico Cabeza la Parra, recorridos unos pocos kilómetros y a la salida de una curva a derechas aparecerá ante nuestros ojos el frontal de la presa de El Burguillo hasta la cual tendremos que continuar para luego cruzar al otro lado del pantano atravesando por la parte superior de esta.  La Presa del Burguillo es una presa de Gravedad, de Hormigón y de almacenamiento, según la clasifiquemos en base a su estructura, material o función y dispone de un vertedero lateral controlado por compuertas que nos deja una magnifica estampa cuando estas son abiertas para liberar el agua en época de lluvias.</p>
						<p>Al final de la presa hay que girar a la derecha, pero decidimos parar en un apartadero que hay  en la bifurcación a hacer unas fotos de la presa y sus vistas. Tras lo cual continuamos nuestro camino ascendiendo por la carretera que conduce a las Cruceras siguiendo el contorno del pantano por el margen izquierdo en sentido ascendente, por supuesto disfrutando de los abundantes pinos negrales que abundan en esta zona oriental de Gredos.</p>
						<p>Atravesamos toda esta zona ligeramente urbanizada para llegar al poblado de Las Cruceras, podemos encontrar un mapa de la zona del Valle de Iruelas a la entrada del poblado, este núcleo urbanizado antiguamente era el lugar de residencia de los trabajadores dedicados a la extracción de resina de la zona, actualmente dispone de un hostal con un bar y casas Rurales en su entorno, así como La casa de la Reserva Natural  del Valle de Iruelas, donde podremos obtener información de la zona y tras de esta la ermita del Carmen, patrona del poblado.</p>
						<p>A escasos kilómetros tras dejar atrás las porteras del poblado, en la bifurcación tomamos la carretera de la izquierda y dejamos a la derecha el camino que nos lleva a la zona recreativa , al camping y al poblado de La Rinconada, adentrándonos en la garganta de Iruelas, a partir de ese momento la carretera se hace mas complicada con muchos tramos de asfalto en muy mal estado. Es a partir de este momento en el que podremos disfrutar de la naturaleza.</p>
						<p>Durante un rato pudimos disfrutar de la compañía del Río Iruelas lugar donde es posible hacer unas fotos magnificas gracias a su lecho de cantos rodados y rocas redondas, también en esta zona y gracias a la época en la que nos encontrábamos hemos podido disfrutar de vacas sueltas pastando con sus terneros a lo largo y ancho del camino, las cuales bajan a pastar a estas zonas.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/vacas-y-terneros.png" alt="Imagen de unas vacas con sus terneros"/>
						<p>Seguimos ascendiendo hasta el punto donde dejamos el coche disfrutando de estos bellos parajes y dejando atrás una antigua piscifactoría ya en desuso y algún salto de agua, la frondosidad se hace cada vez mas notable, llegamos a un punto en el que la carretera desaparece dando lugar a un camino forestal  junto a una portera que restringe el paso solo a vehículos forestales de uno de los muchos caminos de la zona no transitables por vehículos.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/portera-acceso-restringido-valle-iruelas.png" alt="Imagen de una portera que restringe el acceso a un camino."/>
						<p>Aunque la pista sigue, a partir de este momento de tierra, y en algunas zonas, en un estado que hace bastante incomoda la ascensión a para turismos, es en este lugar en el que decidimos dejar el coche, por delante, una larga ascensión no excesivamente complicada hasta el puerto de casillas. Empezamos tranquilamente el ascenso disfrutando de la bonitas panorámicas que la naturaleza nos brinda y el agradable aroma de los pinos negrales que a estas alturas abundan en masas arbóreas que cubren las faldas de las montañas, aprovechamos un día fresco y húmedo que magnificaba todos los aromas.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/inicio-ascension-garganta-iruelas.png" alt="Imagen del caminio y bosque de fondo."/>
						<p>Durante todo el camino tuvimos como compañero el tintineo, unas veces grave y otras más agudo de los cencerros de las vacas que pastaban alrededor nuestro y otras veces en la lejanía de los fondos de los valles, aunque también de cuando en cuando a algún ciclista, que pese a ir en bicicleta y al esfuerzo, a duras penas eran capaces de dejarnos atrás, también a algún que otro coche, que o bien atraviesa por esta zona para evitar la larga vuelta de la zona del Burguillo al Pueblo de Casillas o bien porque ascienden a los pinares altos en busca de níscalos y setas que ahuecan los pinares de la zona.</p>
						<p>En una de las numerosas revueltas del camino nos encontramos un abrevadero donde decidimos parar a recuperar el resuello y a tomar un poco de agua, el agua la traíamos de casa eso sí, también aprovechamos para llevárnosla de recuerdo a casa haciendo unas fotografías.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/abrevadero-revuelta-valle-iruelas.png" alt="Imagen del caminio y bosque de fondo."/>
						<p>Una vez recuperado el aliento y tras habernos hidratado un poco continuamos nuestra ascensión y en una breve parada para escuchar los sonidos del campo o los silencios, al darme la vuelta me encuentro una de las más estupendas estampas del día, ante mis ojos aparece un joven ciervo que a unos cientos de metros y al percatarse de mi presencia, se queda quieto observándome al mismo tiempo que yo hago lo mismo, saqué la cámara con cuidado para evitar que saliera huyendo y me permitió hacer una de las más satisfactorias fotos del día, debido a que la distancia era bastante amplia y el zoom digital de la cámara no es muy bueno, lo cierto es que la imagen carece de suficiente calidad, pero deja testimonio del encuentro con la naturaleza salvaje.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/encuentro-con-ciervo-valle-iruelas.png" alt="Imagen de mi encuentro con un ciervo en libertad."/>
						<p>Continuamos el camino dejando atrás masas de pino negral y cubiertas de helechos de un tamaño considerable, sabiendo que aún quedaba un raContinuamos el camino dejando atrás masas de pino negral y cubiertas de helechos de un tamaño considerable, sabedores de que aún quedaba un buen trecho hasta el paso de montaña del puerto de casillas, pero no por ello haciendo un montón de paradas para fotografiar todo lo que nos rodeaba y disfrutando de este magnifico paraje. haciendo fotos a todo lo que nos rodeaba y disfrutando de este magnífico paraje.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/helechos-y-pinos.png" alt="Imagen de una zona de helechos con pinos al fondo."/>
						<p>A poco de llegar a la zona de aparcamiento del puerto en la zona más alta que transita este camino, no encontramos con otro abrevadero de ganado en una zona donde el camino se hace algo más llano y fácil de afrontar y como no podía ser de otra forma aprovechando para sacar unas fotos damos descanso a nuestras cargadas piernas y disfrutamos del reflejo en el agua quieta.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/abrebadero-mitad-camino.png" alt="Reflejo en el agua del abrebadero."/>
						<p>A escasos centenares de metros de nuestro objetivo y con el ánimo que provocan estas maravillosas vistas aprovechamos para tomar un trago de un pequeño caño, y sin perder demasiado tiempo, pues las nubes comienzan a bajar y a convertirse en niebla, continuamos ascendiendo sabedores de que ya queda poco.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/trago-de-agua-en-el-caño.png" alt="Imagen echando un trago en un pequeño caño."/>
						<p>Al poco de proseguir el camino llegamos al puerto de casillas donde decidimos parar a descansar un poco y hacer unas fotos, ya con las cumbres metidas en niebla y algunos ciclistas y turistas rurales dando una vuelta por la zona, no sin antes explorar un trecho del camino que lleva desde el puerto hasta el Castañar, donde hicimos algunas fotos al valle con el embalse del Burguillo al fondo, pero a estas alturas y debido al cansancio y a alguna gota de agua que empieza a caer decidimos no continuar mas y dar media vuelta, poniendo final a la ascensión, ya solo nos quedaba descender los cerca de 8 kilómetros  hasta el coche.</p>
						<img class="article-img" src="../img/articulo1-paseo-valle-de-iruelas/vista-del-valle.png" alt="Vistas del Valle de Iruelas con el Embalse del Burguillo al fondo."/>
					</article>
				</section>
				<section>					
					<div class="contenedorCompartir">
						<ul>
							<li>
								<a id="enlaceCompartirFacebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://www.iagudotesteo.hol.es/articulos/articulo2.php">
									<img src="../img/img-menu/icono-facebook-gris.png" alt="PERFIL FACEBOOK" onmouseover="this.src='../img/img-menu/icono-facebook-color.png'" onmouseout="this.src='../img/img-menu/icono-facebook-gris.png'"/>
								</a>
							</li>
							<li>
								<a id="enlaceCompartirGoogle" target="_blank">
									<img src="../img/img-menu/icono-google-gris.png" alt="PERFIL GOOGLE+" onmouseover="this.src='../img/img-menu/icono-google-color.png'" onmouseout="this.src='../img/img-menu/icono-google-gris.png'" onclick="compartirEnGoogle()" href="https://plus.google.com/share?url=http://www.iagudotesteo.hol.es/articulos/articulo2.php"/>
								</a>
							</li>
							<li>
								<a id="enlaceCompartirTwitter" target="_blank" href="http://twitter.com/share?text=Me%20ha%20gustado%20esto&url=http://www.iagudotesteo.hol.es/articulos/articulo2.php">
									<img src="../img/img-menu/icono-twitter-gris.png" alt="PERFIL TWITTER" onmouseover="this.src='../img/img-menu/icono-twitter-color.png'" onmouseout="this.src='../img/img-menu/icono-twitter-gris.png'"/>
								</a>
							</li>
						</ul>
					</div>
				</section>
				<section>
					<div id="areaComentarios" class="area-comentarios">
	
			<div id="" class="comentario-individual">
				<div id="comentarioPrincipalAvatar1" class="comentario-principal-avatar">
					<img class="imagen-avatar" src="../img/img-menu/yo2.png"/>
				</div>
				<div id="comentarioPrincipalBocadillo1" class="comentario-principal-bocadillo">
					<div id="comentarioPrincipalBocadilloCabecera1" class="comentario-principal-bocadillo-cabecera">
						<div id="comentarioPrincipalBocadilloCabeceraUsuario1" class="comentario-principal-bocadillo-cabecera-usuario">
						
						</div>
						<div id="comentarioPrincipalBocadilloCabeceraBotones1" class="comentario-principal-bocadillo-cabecera-botones">
						
						</div>
					</div>
					<div id="comentarioPrincipalBocadilloTexto1" class="comentario-principal-bocadillo-texto">
						<p>Comentario artículo Paseo Valle de Iruelas</p>
					</div>
				</div>
			</div>
			<div id="" class="comentario-individual">
				<div id="comentarioRespuestaAvatar1" class="comentario-respuesta-avatar">
					<img class="imagen-avatar" src="../img/img-menu/yo2.png"/>
				</div>
				<div id="comentarioRespuestaBocadillo1" class="comentario-respuesta-bocadillo">
					<div id="comentarioRespuestaBocadilloCabecera1" class="comentario-respuesta-bocadillo-cabecera">
						<div id="comentarioRespuestaBocadilloCabeceraUsuario1" class="comentario-respuesta-bocadillo-cabecera-usuario">
						
						</div>
						<div id="comentarioRespuestaBocadilloCabeceraBotones1" class="comentario-respuesta-bocadillo-cabecera-botones">
						
						</div>
					</div>
					<div id="comentarioRespuestaBocadilloTexto1" class="comentario-respuesta-bocadillo-texto">
						<p>Comentario artículo Paseo Valle de Iruelas</p>
					</div>
				</div>
			</div>
			<div id="" class="comentario-individual">
				<div id="comentarioPrincipalAvatar1" class="comentario-principal-avatar">
					<img class="imagen-avatar" src="../img/img-menu/yo2.png"/>
				</div>
				<div id="comentarioPrincipalBocadillo1" class="comentario-principal-bocadillo">
					<div id="comentarioPrincipalBocadilloCabecera1" class="comentario-principal-bocadillo-cabecera">
						<div id="comentarioPrincipalBocadilloCabeceraUsuario1" class="comentario-principal-bocadillo-cabecera-usuario">
						
						</div>
						<div id="comentarioPrincipalBocadilloCabeceraBotones1" class="comentario-principal-bocadillo-cabecera-botones">
						
						</div>
					</div>
					<div id="comentarioPrincipalBocadilloTexto1" class="comentario-principal-bocadillo-texto">
						<p>Comentario artículo Paseo Valle de Iruelas</p>
					</div>
				</div>
			</div>
			<div id="" class="comentario-individual">
				<div id="comentarioRespuestaAvatar1" class="comentario-respuesta-avatar">
					<img class="imagen-avatar" src="../img/img-menu/yo2.png"/>
				</div>
				<div id="comentarioRespuestaBocadillo1" class="comentario-respuesta-bocadillo">
					<div id="comentarioRespuestaBocadilloCabecera1" class="comentario-respuesta-bocadillo-cabecera">
						<div id="comentarioRespuestaBocadilloCabeceraUsuario1" class="comentario-respuesta-bocadillo-cabecera-usuario">
						
						</div>
						<div id="comentarioRespuestaBocadilloCabeceraBotones1" class="comentario-respuesta-bocadillo-cabecera-botones">
						
						</div>
					</div>
					<div id="comentarioRespuestaBocadilloTexto1" class="comentario-respuesta-bocadillo-texto">
						<p>Comentario artículo Paseo Valle de Iruelas</p>
					</div>
				</div>
			</div>
			
			
	
		</div>
				</section>
			</div>
			<aside id="asideDerecho" class="asideDerechoEstadoUnfixed">
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
		</div>
		<footer id="pieDePagina" class="pieDePaginaEstadoUnfixed">
		</footer>
	</body>
</html>