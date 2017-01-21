<!DOCTYPE html>
<html lang="ES">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>El Castillo</title>

<?php if($_GET['go']=="inicio_fb") {include("includes/styles.php"); echo'<link href="css/font.css" rel="stylesheet">';} else { ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/slidebars.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<?php } ?>
</head>

<body>
<div id="loadid" align="center" style="display:none;background:#000 transparent %50;"><img src="images/loading.gif" /></div>
<div class="sb-slidebar sb-left">
  <ul class="side-menu">
      
    <!--<li id="welcome-user"><a href="<?=$url_reg?>">Registrarse</a></li>!-->
	<hr class="fancy-line-light">
    <li><a id="btn-inicio" href="inicio" class="loadingscreen">Inicio</a></li>
    <li><a id="btn-comprar" href="comprar" class="loadingscreen">Comprar</a></li>
    <li><a id="btn-location" href="gps" class="loadingscreen">Como llegar</a></li>
    <hr class="fancy-line-light">
    <li><a id="btn-logout" href="salir" class="loadingscreen">Salir</a></li>

  </ul>
</div>

<div id="sb-site">
<div class="wrap">