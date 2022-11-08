function redimensionarImagenEnConstruccion(){
	
	var altoventana =  $(window).height();
	var anchoventana =  $(window).width();
	var altoImgFondoEnConstruccion = altoventana-100;
	var anchoImgFondoEnConstruccion = anchoventana;
	
	$("#enConstruccionContenido").css({'min-height':altoImgFondoEnConstruccion });

};
function iraregistro(){
	window.location="http://www.mindtheblog.hol.es/registro/formulario-registro.php";
};
$(document).ready(function(){
	
	$(window).resize(redimensionarImagenEnConstruccion());
	
});
	
	
	// AREA COMENTARIOS
	
	
	function borrar(){
		
		var textoTextarea = $("#insertar-comentario").val();
		
		if( textoTextarea != "" ){
			$("#insertar-comentario").val("");
		}
	}
	
	function noBorrar(){
		
		var textoTextarea = $("#insertar-comentario").val();
		
		if( textoTextarea == "" ){
			$("#insertar-comentario").val("Dejanos tu comentario");
		}
	}
	
	
	
	/* var margenSuperiorPieDePagina = $('#piedepagina').offset().top; */
		
	/* alert ("el alto es: "+altoVentana+" el ancho es "+anchoVentana); */




		/* BOTONES COMPARTIR REDES SOCIALES */
	
	var direccionWeb = window.document.URL;
	var direccionWebCodificada = encodeURIComponent(direccionWeb);
	var tituloPagina = window.document.title;
	var tituloPaginaCodificado = encodeURIComponent(tituloPagina);
	
	
	/* $( ".botonCompartirFacebook" ).on( "click", function() {
		//alert(direccionWeb); */

	function compartirEnGoogle(){
		window.open(document.getElementById('enlaceCompartirGoogle').href,'_blank', 'menubar=yes,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
		return false;		
	};
	
	function compartirEnFacebook(){
	};
	
	function compartirTwitter(){	
	};

	function compartirEn(){	
	};
	