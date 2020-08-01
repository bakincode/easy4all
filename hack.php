<?php 

session_start(); //retoma a sessão anteriormente criada

session_unset(); //por questoes de segurança -> coloca todas as variaveis do array $_SESSION[] a NULL

define("ADMIN_username", "Admin1");

echo "I'm hacking this site xD";

$_SESSION[$session_user_name] = ADMIN_username;

header("Location: http://188.82.50.100/index.php");

exit;  

?>