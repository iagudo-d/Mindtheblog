$(document).ready(function(){
	
	// MENU PEGAJOSO HORIZONTAL completado
	
	/* Almacenamos en la variable "margenSuperiorMenu" la distancia inicial entre el borde superior del area de visualización y la posición inicial de el elemento con la id 'cabeceraSegundaLinea' que corresponde al menú pegajoso. */
	
	var margenSuperiorMenu = $('#cabeceraSegundaLinea').offset().top;	
	
	/* Cuando hagamos scroll sobre el objeto window o lo que es lo mismo la ventana, ejecutará la función. */
	
	$(window).on('scroll',function(){	
		
		/* Si el scroll realizado sobre el objeto 'window' es mayor al valor de la variable "margenSuperiorMenu": */
		
		if($(window).scrollTop()>margenSuperiorMenu){

			/* Cambia la clase del objeto con la id 'cabeceraSegundaLinea' por otra clase que lo ancla en la parte superior de la pantalla */
				
			$('#cabeceraSegundaLinea').addClass('cabeceraSegundaLineaEstadoFixed');	
			$('#cabeceraSegundaLinea').removeClass('cabeceraSegundaLineaEstadoUnfixed');
			
			/* También cambia la clase del objeto con id 'principal' que es el que contiene el resto del documento para evitar el salto que se produce al anclar el menu mediante el estado "fixed" */
			
			$('#principal').addClass('principalEstadoFixed');
			$('#principal').removeClass('principalEstadoUnfixed');
			
			/* También cambia la clase del objeto con id 'pieDePagina' para hacer la transicion de color como el objeto con id 'principal' */
			
			$('#pieDePagina').addClass('pieDePaginaEstadoFixed');
			$('#pieDePagina').removeClass('pieDePaginaEstadoUnfixed');
			
			/* Cambia el z-index de la imagen para que aparezca encima del menu y la imagen por una blanca */
			
			$('#contenedorLogotipo1').addClass('logo1-invisible');
			$('#contenedorLogotipo1').removeClass('logo1-visible');
			$('#contenedorLogotipo2').addClass('logo2-visible');
			$('#contenedorLogotipo2').removeClass('logo2-invisible');
			$('#menuHorizontal').addClass('menuHorizontal-visible');
			$('#menuHorizontal').removeClass('menuHorizontal-invisible');
		}
		
		/* Si el scroll realizado sobre el objeto 'window' es menor a el valor de la variable altura */
		
		else{
			
			/* Cambia la clase del objeto con la id 'cabeceraSegundaLinea' por otra clase que lo desancla de la parte superior de la pantalla */
		
			$('#cabeceraSegundaLinea').addClass('cabeceraSegundaLineaEstadoUnfixed');
			$('#cabeceraSegundaLinea').removeClass('cabeceraSegundaLineaEstadoFixed');
			
			/* También cambia la clase del objeto con id 'principal' que es el que contiene el resto del documento para evitar el salto que se produce al desanclar el menu mediante el estado "fixed" */
			
			$('#principal').addClass('principalEstadoUnfixed');
			$('#principal').removeClass('principalEstadoFixed');
			
			/* También cambia la clase del objeto con id 'pieDePagina' para hacer la transicion de color como el objeto con id 'principal' */
			
			$('#pieDePagina').addClass('pieDePaginaEstadoUnfixed');
			$('#pieDePagina').removeClass('pieDePaginaEstadoFixed');
			
		}
		
		if($(window).scrollTop()==0){
			
			/* Cambia el z-index de la imagen para que aparezca encima del menu y la imagen por una blanca */
			
			$('#contenedorLogotipo1').addClass('logo1-visible');
			$('#contenedorLogotipo1').removeClass('logo1-invisible');
			$('#contenedorLogotipo2').addClass('logo2-invisible');
			$('#contenedorLogotipo2').removeClass('logo2-visible');
			$('#menuHorizontal').addClass('menuHorizontal-invisible');
			$('#menuHorizontal').removeClass('menuHorizontal-visible');
			
		}
	});
	
	// MENU PEGAJOSO HORIZONTAL completado
	
	// TAMAÑO VENTANA SIEMPRE MAYOR completado
		
	/* Almacenamos en dos variables el ancho y alto de la ventana del explorador al iniciar la pagina */
	
	var altoVentana = $(window).height();
	var anchoVentana = $(window).width();
	
	/* Le aplicamos al objeto con id 'main' un alto de la ventana minimo igual al alto de la ventana menos el tamaño de la cabecera */
		
	$("body").css("min-height", altoVentana-100);
		
	/* Si el alto de la ventana cambia, modificamos el valor de el alto del objeto con id 'main' */
	
	$(window).resize(function(){
			
		var altoVentana = $(window).height();
		var anchoVentana = $(window).width();
		
		$("#main").css("min-height", altoVentana-100);
	
	});
	
	// TAMAÑO VENTANA SIEMPRE MAYOR completado

});
	