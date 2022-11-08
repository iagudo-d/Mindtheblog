<?php

$ruta = $_POST['ruta'];
$anchoImagen = $_POST['anchoImagenRedimensionada'];
$altoImagen = $_POST['altoImagenRedimensionada'];
$posicionRecorteHortizontal = $_POST['posicionRecorteHortizontal'];
$posicionRecorteVertical = $_POST['posicionRecorteVertical'];
$anchoRecorte = $_POST['anchoRecorte'];
$altoRecorte = $_POST['altoRecorte'];
$coeficienteRedimension = $_POST['coeficienteRedimension'];


$imagePath = "../img/img-avatar-usuarios/temp/";
$imagePathFinal = "../img/img-avatar-usuarios/users/";
$trozos = explode("/", $ruta);					
$imageNameExt = end($trozos); 
$fin = explode(".", $imageNameExt);					
$imageName = current($fin); 				
$imageExt = end($fin); 
$imageLoc = $ruta;				
$imageInfo   = getimagesize($imageLoc);
$imageWidth  = $imageInfo[0];
$imageHeight = $imageInfo[1];
$imageType   = $imageInfo['mime'];

echo $imagePathFinal.$imageName.".png";
//echo $imageNameExt.'<...>';
//echo $imageName.'<...>';
//echo $imageExt.'<...>';
//echo $imageLoc.'<...>';
//echo $imageType.'<...>';


$lienzo = imagecreatetruecolor(283,334);
imagesavealpha($lienzo, true);
$transparent = imagecolorallocatealpha($lienzo, 255, 255, 255, 127);
imagefill($lienzo, 0, 0, $transparent);

switch($imageType){
	case 'image/jpg':
	case 'image/jpeg':
		$imagen = imagecreatefromjpeg($imageLoc);
			break;
	case 'image/png':
		$imagen = imagecreatefrompng($imageLoc);
			break;
	case 'image/gif':
		$imagen = imagecreatefromgif($imageLoc);
			break;
}

imagecopyresampled($lienzo, $imagen, 0, 0, ($posicionRecorteHortizontal/$coeficienteRedimension), ($posicionRecorteVertical/$coeficienteRedimension), 283, 334, ($anchoRecorte/$coeficienteRedimension), ($altoRecorte/$coeficienteRedimension));

$saveTo = $imagePathFinal.$imageName.'.png';

imagepng($lienzo,$saveTo,9);

imagedestroy($imagen);


$file = $saveTo;

header("Content-disposition: attachment; filename=$file"); 
header("Content-type: application/octet-stream");
//readfile($file);

unlink($imagePath.$imageNameExt);

/**/

?>