<div class="line">
	<div class="column c12">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
				
				<div class="login_nome">
					<label id="nome" for="nome"><strong>Nome:</strong></label>
					<input id="nome" type="text" placeholder="Digite o seu nome" name="nome" /> 
					<span class="imp"><?php echo $nome_ERRO;?></span>

				</div>
				
				<div class="login_password">	
					<label id="psw" for="psw"><strong>Password:</strong></label>
					<input id="psw" type="password" placeholder="Digite a password" name="password" />
					<span class="imp"><?php echo $psw_ERRO;?></span>
				</div>

				<br>

			<input type="submit" value="Entrar" />
			
			<a href=<?php echo "http://" . SERVER_LINK . "/register.php" ?> class="registar">Registar</a>
			
			<br><br>
			
		</form>
	</div>
</div>