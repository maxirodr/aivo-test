<?php

$database="p2000512_boliche"; //database name
$mysql_user = "p2000512_admin"; //database user name
$mysql_password = "Ap1y4d1t0w4ch0"; //database user password
$mysql_host = "localhost";

//login API KEY TOKEN ETC
$key = "J71RATCp6nYEp42tVBoSZG803W";
$login = "2AP4ygn3MfXVHEa";
$key_public = "PKjuDq6WH4G402k60Y18xSIU0o";
$id_comercio = "559739";
$accountid="562218";

//Direcciones para redireccion
$url_web=$_SERVER['SERVER_NAME'];
$url_web=$url_web."/clientes/elcastillo"; //DEBUG
$index_web="/inicio";

//funciones
include("includes/functions.php");


$dbConn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $database);
	if(!$dbConn) {
		echo 'Error M1. Administrador?';
		exit;
	}	

if (!mysqli_set_charset($dbConn, "utf8")) {
 		echo 'Error M2. Administrador?';
		exit;
}

if($_GET['logout']=="true") {
	foreach(array_keys($_SESSION) as $k) unset($_SESSION[$k]);
	$_SESSION = array();
	session_unset();
	session_destroy();
	redireccionar("/ingresar", $url_web);
}//get logout

?>