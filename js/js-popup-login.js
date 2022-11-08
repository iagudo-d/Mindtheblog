function crearPopupLogin(){
	
	$('body').append('<div id="fondoPopupLogin" class="fondo-popup-login"></div><div id="popupLogin" class="popup-login"><img id="iconoCerrarPopupLogin" class="icono-cerrar-popup" src="http://www.mindtheblog.hol.es/img/img-varias/cross-cerrar.png"><div id="contenedorCabeceraLogin" class="contenedor-cabecera-login"><img id="iconoAvatarLogin" src="http://www.mindtheblog.hol.es/img/img-avatar-usuarios/icono-avatar-anonimo-gris-2.png"></div><div id="contenedorFormularioLogin" class="contenedor-formulario-login"><form name="formLogin" action="http://www.mindtheblog.hol.es/login/login-php.php" method="post"><div class="cont-form-log-usuario-contraseña"><div class="estructura-formulario-login-datos"><label for="formLoginUsuario"><p>USUARIO</p></label></div><div class="estructura-formulario-login-datos"><input type="text" name="formularioNombreUsuario" id="formLoginUsuario" value="Usuario"/></div><div class="estructura-formulario-login-datos"><label for="formLoginPassword"><p>CONTRASEÑA</p></label></div><div class="estructura-formulario-login-datos"><input type="password" name="formularioContraseña" id="formLoginPassword" value="Contraseña"/></div></div><div class="cont-form-log-recordarme"><div class="estructura-formulario-login-recordarme"><input type="checkbox" name="recordarPassword" id="formLoginRecordarContraseña" value="Recordarme"/><p>Recordarme</p></div></div><div class="cont-form-log-logearme"><div class="estructura-formulario-login"><input type="submit" name="formularioEnviar" id="formLoginSubmit" value="Logearme"/></div></div><div class="cont-form-log-registrarme"><div class="estructura-formulario-login"><input type="button" name="formularioRegistro" id="formLoginRegistro" value="Registrarme"/></div></div><div class="cont-form-log-registrarme"><div class="estructura-formulario-login"><input type="button" name="formularioRecordarClaves" id="formLoginRecuerdaClaves" value="He olvidado mis claves"/></div></div></form></div></div>');
	
	var topPopup = posicionTopPopupLogin();
	var leftPopup = posicionLeftPopupLogin();
	
	$("#popupLogin").css({"top":topPopup,"left":leftPopup});
	$("#fondoPopupLogin").css({"width":$(window).width(),"height":$(window).height()});
	$("#fondoPopupLogin").attr("onclick","eliminarPopupLogin()");
	$("#iconoCerrarPopupLogin").attr("onclick","eliminarPopupLogin()");
	$("#formLoginRegistro").attr("onclick","iraregistro()");
	$("#formLoginRecuerdaClaves").attr("onclick","crearPopupRecordarDatosLogin()");
	
}
function crearPopupRecordarDatosLogin(){
	
	$('#fondoPopupLogin').remove();
	$('#popupLogin').remove();
	
	$('body').append('<div id="fondoPopupLogin" class="fondo-popup-login"></div><div id="popupLogin" class="popup-login"><img id="iconoCerrarPopupRecordarDatosLogin" class="icono-cerrar-popup" src="http://www.mindtheblog.hol.es/img/img-varias/cross-cerrar.png"><div id="contenedorCabeceraLogin" class="contenedor-cabecera-login"><img id="iconoAvatarLoginDuda" src="http://www.mindtheblog.hol.es/img/img-avatar-usuarios/icono-avatar-anonimo-gris-2-duda.png"></div><div id="contenedorFormularioLogin" class="contenedor-formulario-login"><form name="formRecordarLogin" action="http://www.mindtheblog.hol.es/login/recordar-login-php.php" method="post"><div class="cont-form-recuperar-claves-email"><div class="estructura-formulario-recuperar-contraseña1"><label for="formRecordarLoginEmail"><p>INTRODUCE EL EMAIL CON EL QUE TE REGISTRASTE</p></label></div><div class="estructura-formulario-recuperar-datos"><input type="text" name="formormularioRecordarLoginEmail" id="formRecordarLoginEmail" value="eMail"/></div></div><div class="cont-form-recuperar-claves-email"><div class="estructura-formulario-recuperar-contraseña2"><label for="formRecordarLoginEmail"><p>CLIQUEA A CONTINUACIÓN Y TE ENVIAREMOS LAS CLAVES AL CORREO INTRODUCIDO</p></label></div><div class="cont-form-log-logearme"><div class="estructura-formulario-login"><input type="submit" name="formularioEnviar" id="formLoginSubmit" value="Solicitar"/></div></div></form></div></div>');
	
	var topPopup = posicionTopPopupLogin();
	var leftPopup = posicionLeftPopupLogin();
	
	$("#popupLogin").css({"top":topPopup,"left":leftPopup});
	$("#fondoPopupLogin").css({"width":$(window).width(),"height":$(window).height()});
	$("#iconoCerrarPopupRecordarDatosLogin").attr("onclick","eliminarPopupRecordarDatosLogin()");
	$("#formLoginRegistro").attr("onclick","iraregistro()");
	
}
function eliminarPopupLogin(){
	
	$('#fondoPopupLogin').remove();
	$('#popupLogin').remove();
	
}
function eliminarPopupRecordarDatosLogin(){
	
	$('#fondoPopupLogin').remove();
	$('#popupLogin').remove();
	
	crearPopupLogin();
	
}
function posicionTopPopupLogin(){
	
	var altoVentana = parseInt($(window).height());
	var altoPopupLogin = parseInt($("#popupLogin").height());
	var topPopupLogin = ((altoVentana-altoPopupLogin)/2);
	
	$("#popupLogin").css({"top":topPopupLogin});
	
	return topPopupLogin;
}
function posicionLeftPopupLogin(){
	
	var anchoVentana = parseInt($(window).width());
	var anchoPopupLogin = parseInt($("#popupLogin").width());
	var leftPopupLogin = ((anchoVentana-anchoPopupLogin)/2);
	
	$("#popupLogin").css({"left":leftPopupLogin});
	
	return leftPopupLogin;
}

$(window).load(function(){
	
	window.addEventListener("resize",function(){$("#fondoPopupLogin").css({"width":$(window).width(),"height":$(window).height()});});
	window.addEventListener("resize",posicionTopPopupLogin);
	window.addEventListener("resize",posicionLeftPopupLogin);
	document.getElementById("enlaceLogin").addEventListener("click",crearPopupLogin);

});