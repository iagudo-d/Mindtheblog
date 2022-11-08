<?php
$archivo = "visitas/visitas.txt";
$manejador = fopen($archivo,"a") or die("Imposible abrir el archivo\n"); /*  */

$fechaVisita = date("r")."\r\n";
$ip = $_SERVER['REMOTE_ADDR']."\r\n";
//$phpSelf = $_SERVER['PHP_SELF']."\r\n";
//$gatewayInterface = $_SERVER['GATEWAY_INTERFACE']."\r\n";
//$serverAddress = $_SERVER['SERVER_ADDR']."\r\n";
//$serverName = $_SERVER['SERVER_NAME']."\r\n";
//$serverSoftware = $_SERVER['SERVER_SOFTWARE']."\r\n";
//$serverProtocol = $_SERVER['SERVER_PROTOCOL']."\r\n";
//$requestMethod = $_SERVER['REQUEST_METHOD']."\r\n";
//$requestTime = $_SERVER['REQUEST_TIME']."\r\n";
//$requestTimeFloat = $_SERVER['REQUEST_TIME_FLOAT']."\r\n";
//$queryString = $_SERVER['QUERY_STRING']."\r\n";
//$documentRoot = $_SERVER['DOCUMENT_ROOT']."\r\n";
//$httpAccept = $_SERVER['HTTP_ACCEPT']."\r\n";
//$httpAcceptCharset = $_SERVER['HTTP_ACCEPT_CHARSET']."\r\n";
//$httpAcceptEncoding = $_SERVER['HTTP_ACCEPT_ENCODING']."\r\n";
$httpAcceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE']."\r\n";
//$httpConnection = $_SERVER['HTTP_CONNECTION']."\r\n";
//$httpHost = $_SERVER['HTTP_HOST']."\r\n";
$httpReferer = $_SERVER['HTTP_REFERER']."\r\n";
$httpUserAgent = $_SERVER['HTTP_USER_AGENT']."\r\n";
//$https = $_SERVER['HTTPS']."\r\n";
//$remoteAddress = $_SERVER['REMOTE_ADDR']."\r\n";

fwrite($manejador,"FECHA VISITA: ".$fechaVisita);
fwrite($manejador,"IP VISITA: ".$ip);
fwrite($manejador,"VISITADO INDEX\r\n");
//fwrite($manejador,"PHP SELF: ".$phpSelf);
//fwrite($manejador,"GATEWAY_INTERFACE: ".$gatewayInterface);
//fwrite($manejador,"SERVER_ADDR: ".$serverAddress);
//fwrite($manejador,"SERVER_NAME: ".$serverName);
//fwrite($manejador,"SERVER_SOFTWARE: ".$serverSoftware);
//fwrite($manejador,"SERVER_PROTOCOL: ".$serverProtocol);
//fwrite($manejador,"REQUEST_METHOD: ".$requestMethod);
//fwrite($manejador,"REQUEST_TIME: ".$requestTime);
//fwrite($manejador,"REQUEST_TIME_FLOAT: ".$requestTimeFloat);
//fwrite($manejador,"QUERY_STRING: ".$queryString);
//fwrite($manejador,"DOCUMENT_ROOT: ".$documentRoot);
//fwrite($manejador,"HTTP_ACCEPT: ".$httpAccept);
//fwrite($manejador,"HTTP_ACCEPT_CHARSET: ".$httpAcceptCharset);
//fwrite($manejador,"HTTP_ACCEPT_ENCODING: ".$httpAcceptEncoding);
fwrite($manejador,"HTTP_ACCEPT_LANGUAGE: ".$httpAcceptLanguage);
//fwrite($manejador,"HTTP_CONNECTION: ".$httpConnection);
//fwrite($manejador,"HTTP_HOST: ".$httpHost);
fwrite($manejador,"HTTP_REFERER: ".$httpReferer);
fwrite($manejador,"HTTP_USER_AGENT: ".$httpUserAgent);
//fwrite($manejador,"HTTPS: ".$https);
//fwrite($manejador,"REMOTE_ADDR: ".$remoteAddress);
fwrite($manejador,"\r\n");
fclose($manejador);

?>