function posicionPopupCookiesVisible(){
	
	var altoPantalla = $(window).height();
	var altoPopup = parseFloat($('#popupCookies').css('height'));
	var topPopupCookies = altoPantalla-altoPopup;
	
	$('#popupCookies').css({"top":topPopupCookies});
}
function posicionPopupCookiesInvisible(){
	
	$('#popupCookies').css({"top":$(window).height()});
}
function incluirCookieCookiesAceptadas() {
    
	var cName = "cookies_aceptadas";
	var cValue = 1;
	var cExpires = (365*2);
	var dominio = "path=/"
	var d = new Date();
    d.setTime(d.getTime() + (cExpires*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = "cookies_aceptadas" + "=" + 1 + "; " + expires + "; " + dominio ;
	posicionPopupCookiesInvisible();
	window.setTimeout(function(){$('#popupCookies').css({'display':'none'});},2000);
}
function getCookie(cname){
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
$(document).ready(function(){
	
	window.setTimeout(function(){
		
		$('body').append('<div id="popupCookies" class="popup-cookies"><div id="popupCookiesAdvertencia" class="popup-cookies-advertencia"><p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación. Si continua navegando, consideramos que acepta su uso.</p></div><div id="popupCookiesBotones" class="popup-cookies-botones"><div id="popupCookiesBotonesContenedor" class="popup-cookies-botones-contenedor"><div id="botonAceptarCookies" class="boton-aceptar-cookies" onclick="incluirCookieCookiesAceptadas()">ACEPTO</div><div id="botonManifiestoCookies" class="boton-manifiesto-cookies"><a href="legal/manifiesto-legal-cookies.php">MAS INFO</a></div></div></div></div>');
		
	},500);
	
	window.setTimeout(function(){
	
		var altoPantalla = $(window).height();
		var altoPopup = parseFloat($('#popupCookies').css('height'));
		var issetCookiesAceptadas = getCookie("cookies_aceptadas");
	
		if(issetCookiesAceptadas == 1){
		$('#popupCookies').css({'display':'none'});
		}else{
		posicionPopupCookiesVisible();
		window.addEventListener("resize",posicionPopupCookiesVisible);
		}
		
	},3000);
});