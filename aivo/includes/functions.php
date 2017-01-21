<?php
function redireccionar($pag,$fullurl) {
echo '<script>window.location.replace("http://'.$fullurl.$pag.'");</script>';
//echo $fullurl.$pag;
ob_flush();
flush();
}//redireccionar


?>