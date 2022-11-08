/*function crearPopupImgAvatar(objImg){
	
	var imagen = JSON.parse(objImg);
	//var anchoImagen = imagen[0];
	console.log(imagen);
	
	$('body').append('<div id="fondoPopupImgAvatar" class="fondo-popup-img-avatar"></div>');
	
	var topPopup = posicionTopPopupImgAvatar();
	var leftPopup = posicionLeftPopupImgAvatar();
	var anchoImagen = objImg[0];
	
	
	$("#popupMarcoImagen").css({"top":topPopup,"left":leftPopup});
	$("#fondoPopupImgAvatar").css({"width":$(window).width(),"height":$(window).height()});
	$("#fondoPopupImgAvatar").attr("onclick","eliminarImgAvatar()");
	$("#iconoCerrarPopupImgAvatar").attr("onclick","eliminarImgAvatar()");
	
}*/
function eliminarImgAvatar(){
	
	$('#fondoPopupImgAvatar').remove();
	$('#popupMarcoImagen').remove();
	
}
function posicionTopPopupMarcoImagen(){
	
	var altoVentana = parseInt($(window).height());
	var altoPopupImgAvatar = parseInt($("#popupMarcoImagen").height());
	var topPopupImgAvatar = ((altoVentana-altoPopupImgAvatar)/2);
	
	$("#popupMarcoImagen").css({"top":topPopupMarcoImagen});
	
	return topPopupMarcoImagen;
}
function posicionLeftPopupMarcoImagen(){
	
	var anchoVentana = parseInt($(window).width());
	var anchoPopupImgAvatar = parseInt($("#popupMarcoImagen").width());
	var leftPopupMarcoImagen = ((anchoVentana-anchoPopupImgAvatar)/2);
	
	$("#popupMarcoImagen").css({"left":leftPopupMarcoImagen});
	
	return leftPopupMarcoImagen;
}