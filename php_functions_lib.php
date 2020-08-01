<?php

//BIBLIOTECA DE FUNÇÕES QUE SÃO USADAS EM VARIOS FEICHEIROS AO MESMO TEMPO (para não estar a repetir código)


/* esta função utiliza funções pre-definidas do php e verifica se os dados são válidos
 ou seja, se os dados não estão corrompidos ou se existem tentativas de "hacking" ao nosso site
*/
function valida_input($info) {
	
	$info = trim($info);
	$info = stripslashes($info);
	$info = htmlspecialchars($info);
	
	return $info;
}

?>
