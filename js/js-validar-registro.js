	
	function validarNombreUsuarioCorrecto(){

		var nombreUsuarioCorrecto;
		var usuarioSolicitado = $('#validarNombreUsuario').attr('class');
		
		if ( usuarioSolicitado == "valid" ){
			nombreUsuarioCorrecto = true;
		} else {
			nombreUsuarioCorrecto = false;
		}
		
		return nombreUsuarioCorrecto;
	}
	
	function validarPasswordUsuario1Correcto() {
		
		var passwordUsuario1Correcto;
		
			/* Asignamos el valor escrito a una variable */
		
		var passwordUsuario1 = $("#formReg1PasswordUsuario").val();
		
			/* Validamos la longitud del password */
		
        if ( passwordUsuario1.length < 8 ) {
			passwordUsuarioLongitudCorrecto = false;
        } else {
			passwordUsuarioLongitudCorrecto = true;
        }
		
			/* Obligamos a que tenga una letra minúscula */
		
        if ( passwordUsuario1.match(/[a-z]/) ) {
			passwordUsuario1MinusculaCorrecto = true;
        } else {
			passwordUsuario1MinusculaCorrecto = false;
        }
		
			/* Obligamos a que tenga una letra mayúscula */
		
        if ( passwordUsuario1.match(/[A-Z]/) ) {
			passwordUsuario1MayusculaCorrecto = true;
        } else {
			passwordUsuario1MayusculaCorrecto = false;
        }
		
			/* Obligamos a que tenga un número */
		
        if ( passwordUsuario1.match(/\d/) ) {
			passwordUsuario1NumeroCorrecto = true;
        } else {
			passwordUsuario1NumeroCorrecto = false;
        }
		
		
		if( passwordUsuario1MinusculaCorrecto && passwordUsuario1MayusculaCorrecto && passwordUsuario1NumeroCorrecto && passwordUsuarioLongitudCorrecto ){
			passwordUsuario1Correcto = true;
		} else {
			passwordUsuario1Correcto = false;
		}
		
		return passwordUsuario1Correcto;
		
	}
	
	function validarPasswordUsuario2Correcto() {
		
		var passwordUsuario2Correcto;
		
		var passwordUsuario1 = $("#formReg1PasswordUsuario").val();
		var passwordUsuario2 = $("#formReg2PasswordUsuario").val();
		
			/* Obligamos a que los dos password coincidan */
			
		if(passwordUsuario1 === passwordUsuario2){
			passwordUsuario2CoincidenCorrecto = true;
        } else {
			passwordUsuario2CoincidenCorrecto = false;
        }
		
		if( passwordUsuario2CoincidenCorrecto ){
			passwordUsuario2Correcto = true;
		} else {
			passwordUsuario2Correcto = false;
		}
		
		return passwordUsuario2Correcto;
		
	}
	
	function validarNombreCorrecto() {
		
		var nombreCorrecto;
		
		var nombre = $("#formRegNombre").val();
		
		if( nombre == null || nombre.length == 0 || /^\s*$/.test(nombre) ) {
			nombreCorrecto = false;
		} else {
			nombreCorrecto = true;
		}
		
		return nombreCorrecto;
		
	}
	
	function validarApellido1Correcto() {
		
		var apellido1Correcto;
		
		var apellido1 = $("#formRegApellido1").val();
		
		if( apellido1 == null || apellido1.length == 0 || /^\s*$/.test(apellido1) ) {
			apellido1Correcto = false;
		} else {
			apellido1Correcto = true;
		}
		
		return apellido1Correcto;
		
	}
	
	function validarApellido2Correcto() {
		
		var apellido2Correcto;
		
		var apellido2 = $("#formRegApellido2").val();
		
		if( apellido2 == null || apellido2.length == 0 || /^\s*$/.test(apellido2) ) {
			apellido2Correcto = false;
		} else {
			apellido2Correcto = true;
		}
		
		return apellido2Correcto;
		
	}
	
	function validarEmailUsuarioCorrecto() {
		
		var emailUsuarioCorrecto;
		
		var emailUsuario1 = $("#formRegEmail").val();
		var regExp = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		var resultadoComprobacionEmail = regExp.test(emailUsuario1);
		
		if(resultadoComprobacionEmail === true){
			emailUsuarioCorrecto = true;
		} else {
			emailUsuarioCorrecto = false;
		}
		
		return emailUsuarioCorrecto;
		
	}
	
	function validarSexoUsuarioCorrecto() {
		
		var sexoUsuarioCorrecto;
		
		var sexoUsuario = $('input[name=sexo]'); 
		var ischeck = sexoUsuario.is(':checked');
		
		if(ischeck === true){
			sexoUsuarioCorrecto = true;
		} else {
			sexoUsuarioCorrecto = false;
		}
		
		return sexoUsuarioCorrecto;
		
	}
	
	function validarFormul() {
		
		var todosLosCamposCorrectos;
		
		var resultadoNombreUsuario = validarNombreUsuarioCorrecto();
		var resultadoPassword1 = validarPasswordUsuario1Correcto();
		var resultadoPassword2 = validarPasswordUsuario2Correcto();
		var resultadoNombre = validarNombreCorrecto();
		var resultadoApellido1 = validarApellido1Correcto();
		var resultadoApellido2 = validarApellido2Correcto();
		var resultadoEmail = validarEmailUsuarioCorrecto();
		var resultadoSexo = validarSexoUsuarioCorrecto();
		
		if( resultadoNombreUsuario && resultadoPassword1 && resultadoPassword2 && resultadoNombre && resultadoApellido1 && resultadoApellido2 && resultadoEmail && resultadoSexo ){
			todosLosCamposCorrectos = true;
			alert("correcto");
		} else {
			todosLosCamposCorrectos = false;
			alert("opps");
		}
		
		return todosLosCamposCorrectos;
		
    }
	
	function posicionTopPopupMarcoImagen(imgHeight){
	
		var altoVentana = parseInt($(window).height());
		var altoPopupImgAvatar = parseInt(imgHeight);
		var topPopupMarcoImagen = ((altoVentana-altoPopupImgAvatar)/2);
		
		$("#popupMarcoImagen").css({"top":topPopupMarcoImagen});
		
		return topPopupMarcoImagen;
	}
	
	function posicionLeftPopupMarcoImagen(imgWidth){
		
		var anchoVentana = parseInt($(window).width());
		var anchoPopupImgAvatar = parseInt(imgWidth);
		var leftPopupMarcoImagen = ((anchoVentana-anchoPopupImgAvatar)/2);
	
		$("#popupMarcoImagen").css({"left":leftPopupMarcoImagen});
		
		return leftPopupMarcoImagen;
	}

$(document).ready(function(){
	
	// FORMULARIO DE REGISTRO Y VALIDACION

	/* Este script valida los formularios mediante javascript asociado a los imputs del archivo formulario-registro.php
	a través de eventos así mismo asociados a eventos de dichos inputs */
	
		/* Validar NombreUsuario 1 completo */
	
	$('#formRegNombreUsuario').keyup(function(){
			
		$('#validarNombreUsuario').html('<div id="loading"><img id="iconoLoading" src="../img/loading.gif"/></div>');

		var usuarioSolicitado = $('#formRegNombreUsuario').val();
		var dataString = 'user='+usuarioSolicitado;

		$.ajax({
			url: "../registro/validar-nombre-usuario.php",
			type: "POST",
			timeout: 20000,
			data: dataString,
			success: function(data){
				
				var nombreUsuarioLibre = ( data === "true");
				
				if( nombreUsuarioLibre == true ){
					$('#validarNombreUsuario').removeClass('invalid').addClass('valid');
					$('#validarNombreUsuario').fadeIn(1000).html('El nombre de usuario "'+usuarioSolicitado+'" esta disponible');
				} else {
					$('#validarNombreUsuario').removeClass('valid').addClass('invalid');
					$('#validarNombreUsuario').fadeIn(1000).html('El nombre de usuario "'+usuarioSolicitado+'" esta ocupado');
				}
			}
		});
	});
	$( "#formRegNombreUsuario" ).focus(function() {
        $('#tooltipRequerimientosNombreUsuario').show();
    });
	$( "#formRegNombreUsuario" ).blur(function() {
        $('#tooltipRequerimientosNombreUsuario').hide();
    });
	
		/* Validar Password 1 completo */
	
	$( "#formReg1PasswordUsuario" ).keyup( function(){
		
			/* Asignamos el valor escrito a una variable */
		
		var passwordUsuario1 = $("#formReg1PasswordUsuario").val();
		
			/* Validamos la longitud del password */
		
        if ( passwordUsuario1.length < 8 ) {
            $('#necesitaMinimoCaracteres').removeClass('valid').addClass('invalid');
        } else {
            $('#necesitaMinimoCaracteres').removeClass('invalid').addClass('valid');
        }
		
			/* Obligamos a que tenga una letra minúscula */
		
        if ( passwordUsuario1.match(/[a-z]/) ) {
            $('#necesitaMinuscula').removeClass('invalid').addClass('valid');
        } else {
            $('#necesitaMinuscula').removeClass('valid').addClass('invalid');
        }
		
			/* Obligamos a que tenga una letra mayúscula */
		
        if ( passwordUsuario1.match(/[A-Z]/) ) {
            $('#necesitaMayuscula').removeClass('invalid').addClass('valid');
        } else {
            $('#necesitaMayuscula').removeClass('valid').addClass('invalid');
        }
		
			/* Obligamos a que tenga un número */
		
        if ( passwordUsuario1.match(/\d/) ) {
            $('#necesitaNumero').removeClass('invalid').addClass('valid');
        } else {
            $('#necesitaNumero').removeClass('valid').addClass('invalid');
        }
	});
	$( "#formReg1PasswordUsuario" ).focus(function() {
        $('#tooltipRequerimientosPassword1').show();
    });
	$( "#formReg1PasswordUsuario" ).blur(function() {
        $('#tooltipRequerimientosPassword1').hide();
    });
	
		/* Validar Password 2 completo */
	
	$( "#formReg2PasswordUsuario" ).keyup(function(){
		
		var passwordUsuario1 = $("#formReg1PasswordUsuario").val();
		var passwordUsuario2 = $("#formReg2PasswordUsuario").val();
		
			/* Obligamos a que los dos password coincidan */
			
		if(passwordUsuario1 === passwordUsuario2){
            $('#coincidirPassword').removeClass('invalid').addClass('valid');
        } else {
            $('#coincidirPassword').removeClass('valid').addClass('invalid');
        }
	});
	$( "#formReg2PasswordUsuario" ).focus(function() {
        $('#tooltipRequerimientosPassword2').show();
    });
	$( "#formReg2PasswordUsuario" ).blur(function() {
        $('#tooltipRequerimientosPassword2').hide();
    });
	
		/* Validar nombre completo */
	
	$( "#formRegNombre" ).keyup(function(){
		
		var nombreUsuario = $(this).val();
		
		if ( nombreUsuario == null || nombreUsuario.length == 0 || /^\s*$/.test(nombreUsuario) ) {
            $('#validarNombre').removeClass('valid').addClass('invalid');
        } else {
            $('#validarNombre').removeClass('invalid').addClass('valid');
		}
	});
	$( "#formRegNombre" ).focus(function() {
        $('#tooltipRequerimientosNombre').show();
    });
	$( "#formRegNombre" ).blur(function() {
        $('#tooltipRequerimientosNombre').hide();
    });
	
		/* Validar apellido1 completo */
	
	$( "#formRegApellido1" ).keyup(function(){
		
		var apellido1Usuario = $(this).val();
		
		if ( apellido1Usuario == null || apellido1Usuario.length == 0 || /^\s*$/.test(apellido1Usuario) ) {
            $('#validarApellido1').removeClass('valid').addClass('invalid');
        } else {
            $('#validarApellido1').removeClass('invalid').addClass('valid');
		}
	});
	$( "#formRegApellido1" ).focus(function() {
        $('#tooltipRequerimientosApellido1').show();
    });
	$( "#formRegApellido1" ).blur(function() {
        $('#tooltipRequerimientosApellido1').hide();
    });
	
		/* Validar apellido2 completo */
	
	$( "#formRegApellido2" ).keyup(function(){
		
		var apellido2Usuario = $(this).val();
		
		if ( apellido2Usuario == null || apellido2Usuario.length == 0 || /^\s*$/.test(apellido2Usuario) ) {
            $('#validarApellido2').removeClass('valid').addClass('invalid');
        } else {
            $('#validarApellido2').removeClass('invalid').addClass('valid');
		}
	});
	$( "#formRegApellido2" ).focus(function() {
        $('#tooltipRequerimientosApellido2').show();
    });
	$( "#formRegApellido2" ).blur(function() {
        $('#tooltipRequerimientosApellido2').hide();
    });
	
		/* Validar Email completo*/
	
	$( "#formRegEmail" ).keyup(function(){
		
		var emailUsuario1 = $(this).val();
		var regExp = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		var resultadoComprobacionEmail = regExp.test(emailUsuario1);
		
		if(resultadoComprobacionEmail === true){
            $('#validarEmail').removeClass('invalid').addClass('valid');
        } else {
            $('#validarEmail').removeClass('valid').addClass('invalid');
        }
	});
	$( "#formRegEmail" ).focus(function() {
        $('#tooltipRequerimientosEmail').show();
    });
	$( "#formRegEmail" ).blur(function() {
        $('#tooltipRequerimientosEmail').hide();
    });
	
		/* SELECCION DE IMAGEN */
	
		/* Para poder modificar el botón del input type file lo que vamos a hacer es ocultar
		* este input y crearemos dos input para simular su funcionamiento, uno type button para
		* abrir el selector de fichero y otro type text para mostrar el texto del archivo
		* seleccionado. */

		/* Ahora seleccionamos el input type button e indicamos que al hacer click en el lo que hará
		* es hacer click en el input type file, de esta manera al hacer click en el boton type button
		* que si es modificable mediante css abrira el explorador de archivos del S.O. */

	$( "#formRegistroBotonElegirAvatar" ).click(function(){
		document.getElementById("formRegAvatarUsuarioOculto").click();
	});
	
		/* Como el input type file nos muestra un texto con el fichero seleccionado y hemos creado un
		* input type text para mostrar dicho texto, lo que haremos es añadir un escuchador de eventos 
		* al input type file que hemos ocultado para que cuando al seleccionar un archivo y este cambie
		* se ejecute una función */

	document.getElementById("formRegAvatarUsuarioOculto").addEventListener("change",function (){

		/* La función llamada por el escuchador de eventos al cambiar el input type file, lo que va a hacer es
		* almacenar en una variable el valor del input type file */

		var archivoSeleccionado = $("#formRegAvatarUsuarioOculto").val();
		
		/* Así mismo crearemos una funcion para extraer el nombre del archivo eliminando toda la ruta
		* como si se tratase de basename() de php */

		function basename(path) {
			return path.split('\\').reverse()[0];
		}
		
		/* Ahora aplicaremos al input type text que creamos para visualizar el value del input type file */
		
		$("#formRegAvatarUsuarioVisualizado").val( basename(archivoSeleccionado));
		
		/* El siguiente trozo de codigo lo que hace es almacenar la imagen en una carpeta temporal en el servidor
		* para ello llamará al archivo upload.php que es el que se encargará de guardar dicho archivo de imagen para
		* posteriormente visualizarlo en un DIV a modo de vista previa. */
		
		
		//$('#formRegEstPreviaAvatar').html('<div id="loading"><img id="iconoLoading" src="../img/loading.gif"/></div>');
		
		var inputFileImage = document.getElementById("formRegAvatarUsuarioOculto");
		var file = inputFileImage.files[0];
		var data = new FormData();
		data.append('archivo',file);
		
		$.ajax({
			url: "../registro/upload.php",
			type: "POST",
			timeout: 200000,
			data: data,
			contentType:false,
			processData:false,
			success:function(data){
				
				var obj = JSON.parse(data);
				var anchoImagen = obj[0];
				var altoImagen = obj[1];
				var anchoPantalla = $(window).width();
				var altoPantalla = $(window).height();
				var topPopup = posicionTopPopupMarcoImagen(altoImagen);
				var leftPopup = posicionLeftPopupMarcoImagen(anchoImagen);
				var ruta = "http://www.mindtheblog.hol.es/img/img-avatar-usuarios/temp/";
				var windowPixelAspectRatio = (anchoPantalla/altoPantalla);
				var imgPixelAspectRatio = (anchoImagen/altoImagen);
				
				$('body').append('<div id="fondoPopupImgAvatar" class="fondo-popup-img-avatar"></div><div id="botonCrearAvatar" class="boton-crear-avatar">GUARDAR SELECCION</div>');
				$('body').append('<div id="popupMarcoImagen" class="popup-marco-imagen"><div id="mascaraOscuraPopupAvatar" class="mascara-oscura-popup-avatar"></div><img id="iconoCerrarPopupAvatar" class="icono-cerrar-popup-avatar" src="http://www.mindtheblog.hol.es/img/img-varias/cross-cerrar.png"><img id="avatarVistaPreviaPopup" src="http://www.mindtheblog.hol.es/img/img-avatar-usuarios/icono-avatar-anonimo-gris-2.png" alt="Vista Previa de tu Avatar"/></div>');
				$('#popupMarcoImagen').append('<div id="marcoSelector" class="marco-selector ui-widget-content"></div>');
				
				document.getElementById("avatarVistaPreviaPopup").setAttribute("src", ruta+basename(archivoSeleccionado));
				
				$("#marcoSelector").draggable({ containment: "parent" });
				$(function(){$( "#marcoSelector" ).resizable({containment: "#popupMarcoImagen",aspectRatio:true});});
				
				window.addEventListener("resize",function(){$("#fondoPopupImgAvatar").css({"width":$(window).width(),"height":$(window).height()});});
				
				if(anchoImagen<=(($(window).width())-40) && altoImagen<=(($(window).height())-40)){
					$("#popupMarcoImagen").css({"width":anchoImagen,"height":altoImagen,"top":topPopup,"left":leftPopup});
				}
				else if(anchoImagen<=(($(window).width())-40) && altoImagen>(($(window).height())-40)){
					var coefReduccion = ((($(window).height())-40)/altoImagen);
					$("#popupMarcoImagen").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion),"top":20,"left":($(window).width()-(anchoImagen*coefReduccion))/2});
					$("#avatarVistaPreviaPopup").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion)});
				}
				else if(anchoImagen>(($(window).width())-40) && altoImagen<=(($(window).height())-40)){
					var coefReduccion = ((($(window).width())-40)/anchoImagen);
					$("#popupMarcoImagen").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion),"top":($(window).height()-(altoImagen*coefReduccion))/2,"left":20});
					$("#avatarVistaPreviaPopup").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion)});
				}
				else if(anchoImagen>(($(window).width())-40) && altoImagen>(($(window).height())-40)){
					if(windowPixelAspectRatio>imgPixelAspectRatio){
						var coefReduccion = ((($(window).height())-40)/altoImagen);
						$("#popupMarcoImagen").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion),"top":20,"left":($(window).width()-(anchoImagen*coefReduccion))/2});
						$("#avatarVistaPreviaPopup").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion)});
					}
					else if(windowPixelAspectRatio<imgPixelAspectRatio){
						var coefReduccion = ((($(window).width())-40)/anchoImagen);
						$("#popupMarcoImagen").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion),"top":($(window).height()-(altoImagen*coefReduccion))/2,"left":20});
						$("#avatarVistaPreviaPopup").css({"width":(anchoImagen*coefReduccion),"height":(altoImagen*coefReduccion)});
					}
				}
				
				window.addEventListener("resize",function(){
				
					if(anchoImagen<=(($(window).width())-40) && altoImagen<=(($(window).height())-40)){
						$("#popupMarcoImagen").css({"width":parseInt(anchoImagen),"height":parseInt(altoImagen),"top":posicionTopPopupMarcoImagen(altoImagen),"left":posicionLeftPopupMarcoImagen(anchoImagen)});
						$("#avatarVistaPreviaPopup").css({"width":parseInt(anchoImagen),"height":parseInt(altoImagen)});
					}
					else if(anchoImagen<=(($(window).width())-40) && altoImagen>(($(window).height())-40)){
						var coefReduccion = ((($(window).height())-40)/altoImagen);
						$("#popupMarcoImagen").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion),"top":20,"left":parseInt(($(window).width()-(anchoImagen*coefReduccion))/2)});
						$("#avatarVistaPreviaPopup").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion)});
					}
					else if(anchoImagen>(($(window).width())-40) && altoImagen<=(($(window).height())-40)){
						var coefReduccion = ((($(window).width())-40)/anchoImagen);
						$("#popupMarcoImagen").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion),"top":($(window).height()-(altoImagen*coefReduccion))/2,"left":20});
						$("#avatarVistaPreviaPopup").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion)});
					}
					else if(anchoImagen>(($(window).width())-40) && altoImagen>(($(window).height())-40)){
						if(windowPixelAspectRatio>imgPixelAspectRatio){
							var coefReduccion = ((($(window).height())-40)/altoImagen);
							$("#popupMarcoImagen").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion),"top":20,"left":($(window).width()-(anchoImagen*coefReduccion))/2});
							$("#avatarVistaPreviaPopup").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion)});
						}
						else if(windowPixelAspectRatio<imgPixelAspectRatio){
							var coefReduccion = ((($(window).width())-40)/anchoImagen);
							$("#popupMarcoImagen").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion),"top":($(window).height()-(altoImagen*coefReduccion))/2,"left":20});
							$("#avatarVistaPreviaPopup").css({"width":parseInt(anchoImagen*coefReduccion),"height":parseInt(altoImagen*coefReduccion)});
						}
					}
				});
				
				document.getElementById("botonCrearAvatar").addEventListener("click",function (){
		
					var nombreImagen = $("#avatarVistaPreviaPopup").attr("src");
					var anchoImagenRedimensionada = $("#avatarVistaPreviaPopup").width();
					var altoImagenRedimensionada = $("#avatarVistaPreviaPopup").height();
					var posicionRecorteHortizontal = $("#marcoSelector").css('left');
					var posicionRecorteVertical = $("#marcoSelector").css('top');
					var anchoRecorte = parseInt($("#marcoSelector").width());
					var altoRecorte = parseInt($("#marcoSelector").height());
					var coeficienteRedimension = (parseInt($("#avatarVistaPreviaPopup").width())/anchoImagen);
					
					var dataString = 'ruta='+nombreImagen+'&anchoImagen='+anchoImagen+'&altoImagen='+altoImagen+'&posicionRecorteHortizontal='+posicionRecorteHortizontal+'&posicionRecorteVertical='+posicionRecorteVertical+'&anchoRecorte='+anchoRecorte+'&altoRecorte='+altoRecorte+'&coeficienteRedimension='+coeficienteRedimension;
					
					$.ajax({
						url: "../registro/creador-de-avatar.php",
						type: "POST",
						timeout: 200000,
						data: dataString,
						success:function(data){
							$('#fondoPopupImgAvatar').remove();
							$('#botonCrearAvatar').remove();
							$('#popupMarcoImagen').remove();
							setTimeout(function (){document.getElementById("avatarVistaPrevia").setAttribute("src", data)},5000);
							console.log(data);
						}
					})
				})
			}
		})
	})
	
	
	
	// FORMULARIO DE REGISTRO Y VALIDACION
	
});