<?php

$previewAvatar = $_FILES['archivo'];

$previewName = $previewAvatar['name'];
$previewType = $previewAvatar['type'];
$previewTempName = $previewAvatar['tmp_name'];

$rutatemporal = "../img/img-avatar-usuarios/temp/";
$rutatemporal = $rutatemporal . basename( $previewName );
			
$imageInfo   = getimagesize($rutatemporal);

if(move_uploaded_file($previewTempName, $rutatemporal)){
	
	$miArray = getimagesize($rutatemporal);
	print_r(json_encode($miArray));
	/*echo '<div id="fondoPopupImgAvatar" class="fondo-popup-img-avatar"></div>';
	echo '<div id="popupMarcoImagen" class="popup-marco-imagen">';
	echo '<img id="imgAvatarPreview" class="img-avatar-preview" src="http://www.mindtheblog.hol.es/img/img-avatar-usuarios/temp/'.$previewName.'"/>';
	echo '<img id="iconoCerrarPopupImgAvatar" class="icono-cerrar-popup" src="http://www.mindtheblog.hol.es/img/img-varias/cross-cerrar.png"/>';
	echo '</div>';
	echo '</div>';*/
}else{
	echo "false";
};


?>