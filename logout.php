<?php 

session_start(); //retoma a sessão anteriormente criada

session_unset(); //por questoes de segurança -> coloca todas as variaveis do array $_SESSION[] a NULL

session_destroy(); //destroi o array $_SESSION[]

header("Location: index.php");

exit;  

?>