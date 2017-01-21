<?php
session_start();
error_reporting(E_ALL);

//url de prueba: http://imaxdesign.com.ar/clientes/aivo/?id=1628200751

//Cargo modulos Facebook
include_once "src/Facebook/autoload.php";

$fbconfig['appid' ]     = "1541298022567067"; //dev panel facebook - AIVO APP TEST
$fbconfig['secret']     = "cfa6bb959893f9917068c0c6a22d4817"; //dev panel facebook - AIVO APP TEST

//Instancia de app
$facebook = new Facebook\Facebook([
		'app_id' => $fbconfig['appid'],
		'app_secret' => $fbconfig['secret'],
		'default_graph_version' => 'v2.8',
		'default_access_token' => '1541298022567067|6S1sSZblX8VOlI3mQcX2U4vGCr8',
]);

if( isset($_GET['id']) && is_numeric($_GET['id']) ) {
	try {
	  $user = $facebook->get('/'.$_GET['id'].'?fields=id,first_name,last_name,cover');
	  $userinfo = $user->getDecodedBody();
	  
	  //var_dump($userinfo); //si se quiere ver la información sin depurar
	  
	  echo "
	  ID: $userinfo[id] <br/>
	  First Name: $userinfo[first_name] <br/>
	  Last Name: $userinfo[last_name] <br/>
	  <br/> <br/> <br/> <br/> <br/>
	  
	  <img src=\"".$userinfo["cover"]["source"]."\" />
	  ";
	  
	}
	catch(Exception $o){
    	//debug_text($o);
		echo "Error: ".$o->getMessage();
	}
} else {
	echo "For acquire data, you need to write a ID $_GET request through URL. Example: http://imaxdesign.com.ar/clientes/aivo/?id=1628200751";
}

?>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1541298022567067',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>