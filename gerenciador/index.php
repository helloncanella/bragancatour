<?php 	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="../css/login.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script>

	$(function(){

		/*Mostrar senha*/	
		$('input#mostrar-senha').click(function(){
			
			if(this.checked){
				$("#senha").attr('type','text');	
			}else{
				$("#senha").attr('type','password');
			}
							
		
		});	
	});

	</script>


</head>
<body>
	<div class="box">
		
		<img src="../images/logo-horizontal.svg" alt="logo" title='Bragança Tour'>

		<div class="login">

			<form action="login.php" method="POST">
				<div class='field'>
					<label for="usuario">Usuário</label>
					<input type="text" id='usuario' name='usuario'>
				</div>

				<div class='field'>
					<label for="senha">Senha</label>
					<input type="password" id='senha' name='senha'>

				</div>
				<div class='field'>
					<?php

						if(isset($_SESSION['submit'])){
							echo "O usuário informado não existe ou senha digitada é incorreta";
							
							/*Destruindo todas as informações informadas pelo usuário*/
							session_destroy();
						} 
					?>
				</div>	
				
				<div class='field'>
					<div class='mostrar'>
						<input type="checkbox" id='mostrar-senha' value='mostrar' name='mostrar-senha'>
						<label for="mostrar-senha">Mostrar senha</label>
					</div>
					<button name='submit' type="submit" value='login'>Enviar</button>
				</div>
				
				
			</form>
		</div>
	</div>
</body>
</html>