<!DOCTYPE html>
<html lang="pt">

	<?php include "head.php" ?>

	<body>


		<?php

		include "defines.php"; 
		include "php_functions_lib.php";

		include "nav_bar.php";

		?>

		<div class="line">

			<?php
			
			$nome_Erro = $email_Erro = $re_email_Erro = $psw_Erro = $re_psw_Erro = "";
			$nome = $email = $re_email = $psw = $re_psw = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				if (empty($_POST["nome"])) $nome_Erro = "Obrigatório introduzir o nome!";
				else $nome = valida_input($_POST["nome"]);
			  
			  	if (empty($_POST["email"])) $email_Erro = "Obrigatório introduzir o email!";
			  	else $email = valida_input($_POST["email"]);

			  	if (empty($_POST["re_email"])) $re_email_Erro = "Obrigatório re-introduzir o email!";
			  	else $re_email = valida_input($_POST["re_email"]);

			  	if (empty($_POST["psw"])) $psw_Erro = "Obrigatório introduzir a password!";
			  	else $psw = valida_input($_POST["psw"]);

			  	if (empty($_POST["re_psw"])) $re_psw_Erro = "Obrigatório re-introduzir a password!";
			  	else $re_psw = valida_input($_POST["re_psw"]);		  


			  	//este if testa se as passwords e os emails coincidem - ou seja - se é um bom registo
			  	if ($email == $re_email and $psw == $re_psw and $nome != "" and $email != "" and $re_email != "" and $psw != "" and $re_psw != ""){
					echo "<br>";
					//echo "<script type='text/javascript'>alert('failed!')</script>"; //javascript aqui 
					echo "BOM registo, a passowrd e email coincidem";
					echo "<br><br>";
				}

				else{
					echo "<br>";
					//echo "<script>alert('failed!')</script>"; //javascript aqui 
					echo "MAU registo";
					echo "<br><br>";
				}
			}

			?>

			<h2>Introduza os seus dados no respetivo campo:</h2>
			<br>
			
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				
				Nome: <input type="text" name="nome" maxlength="15">
				<span class="imp">&nbsp * <?php echo $nome_Erro;?></span>
				<br><br>
				
				E-mail: <input type="text" name="email">
				<span class="imp">&nbsp * <?php echo $email_Erro;?></span>
				<br><br>

				Confirmar o e-mail: <input type="text" name="re_email">
				<span class="imp">&nbsp * <?php echo $re_email_Erro;?></span>
				<br><br>
				
				Password: <input type="password" name="psw" minlength="8">
				<span class="imp">&nbsp * <?php echo $psw_Erro;?></span>
				<br><br>
				
				Confirmar a password: <input type="password" name="re_psw">
				<span class="imp">&nbsp * <?php echo $re_psw_Erro;?></span>
				<br><br>

				Sexo: &nbsp
					<input type="radio" name="gender" value="femenino"> Femenino &nbsp
					<input type="radio" name="gender" value="masculino"> Masculino &nbsp
					<input type="radio" name="gender" value="outro"> Outro &nbsp
					<br><br><br>

					<input type="submit" name="submit" value="Registar"> 
				<span class = "imp">&nbsp &nbsp * Preenchimento Obrigatório</span>
			</form>

		</div>

		<?php include "footer.php"; ?>

	</body>

</html>
