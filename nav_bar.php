<?php

/* Este IF (que tem haver com o login) está posicionado estratégicamente neste ficheiro uma vez que 
   a barra de navegação do site altera-se quando o utilizador é o Admin1. Para que as alterações tenham efeito 
   logo quando se carrega no botão de entrar (login) temos de alterar a variável $_SESSION["user_name"] antes 
   de a barra de navegação ser impressa no ecrã.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//define-se as mensagens de ERRO
	$nome_ERRO = $psw_ERRO = "";

	//define-se que o nome e a password são nulas no inicio
	$nome = $psw = $_SESSION[$session_user_name] = "";


	/* Caso o utilizador carregue no botão para entrar (login) e não tenha digitado o nome
	   apareçe no ecra uma mensagem de erro a dizer: "Esqueçeu-se de digitar o nome!".
	   Caso contrário, NÂO apareçe nada (por este motivo em cima tinha-se definido que as mensagens de erro são "" no início), e de seguida o nome é transmitido para a variável $nome.
	*/
	if (empty($_POST["nome"])) $nome_ERRO = "Esqueçeu-se de digitar o nome!";
	else $nome = valida_input($_POST["nome"]);
	

	/* Caso o utilizador carregue no botão para entrar (login) e não tenha digitado a password
	   apareçe no ecra uma mensagem de erro a dizer: "Esqueçeu-se de digitar a password!".
	   Caso contrário, NÂO apareçe nada (por este motivo em cima tinha-se definido que as mensagens de erro são "" no início), e de seguida a password é transmitido para a variável $psw.
	*/
	if (empty($_POST["password"])) $psw_ERRO = "Esqueçeu-se de digitar a password!";
	else $psw = valida_input($_POST["password"]);


	/* Este if é SÓ para testar se o sistema de login funciona: 
	   atualmente a única conta do nosso site é a conta de ADMINISTRADOR (definida no ficheiro defines.php) desta forma caso o nome e passowrd que o utilizador introduzir esteja correta então o nome (Admin1) é transmitido para a variável $_SESSION["user_name"], para mais á frente ser utilizada.
	*/
	if ($nome == ADMIN_username and $psw == ADMIN_password){
		
		$_SESSION[$session_user_name] = $nome;
	}

}


?>
<div class="header"> 
	<div class="line">
		<header>
			<div class="column c4"> 
				<a href="."><h1 class="logo1" >easy4all</h1></a>
			</div>
			<div class="column c8"> 
				<nav>
					<ul class="menu inline remove-markers" />
						
						<li><a href="." class="button-menu">Home</a></li>
						
						<!-- <li><a href= <?php echo "http://" . SERVER_LINK . "/?contact" ?> class="button-menu">Contact</a></li> -->
						
						<!-- <li><a href= <?php echo "http://" . SERVER_LINK . "/?about_us" ?> class="button-menu">About us</a></li> --> 
						
						<?php if ($_SESSION[$session_user_name] == ADMIN_username) echo "<li><a href= http://" . SERVER_LINK . "/?admin class=button-menu>ADMIN</a></li>" ?>

						<?php if ($_SESSION[$session_user_name] == "") echo "<li><a href=http://" . SERVER_LINK . "/?login class=button-menu>login</a></li>" ?>

						<?php if ($_SESSION[$session_user_name] != "") echo "<li><a href=http://" . SERVER_LINK . "/?logout class=button-menu>logout</a></li>" ?>
					</ul>
				</nav>
			</div>				
		</header>
	</div>
</div>