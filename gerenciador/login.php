<?php 
	
	
	$_SESSION['submit']=$_POST['submit'];	

	//Coletar nome de usuário e senha fornecidos na pagina inicial
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha']  ; 


	//Abrir banco de dados
	$path = "../routines/dataBaseLibrary/config.php";
	include($path);

	$path = "../routines/dataBaseLibrary/opendb.php";

	include($path);	

	//sanitizar 
	$usuario = stripslashes($usuario);
	$senha   = stripslashes($senha);

	$usuario = mysqli_real_escape_string($conn,$usuario);
	$senha   = mysqli_real_escape_string($conn,$senha);

	//Verificar se nome e senha de usuário existem
	$statement = "SELECT * FROM login WHERE username='$usuario' AND password='$senha'";	

	$resultado = mysqli_query($conn,$statement);		

	if(mysqli_error($conn)){
		echo mysqli_error($conn);	
	}

	$num = mysqli_num_rows($resultado);	

	//Caso afirmativo, conduzir usuário para página de preenchimento 
	if($num==1){
		header('Location: formulario.php');
	}else{
		$_SESSION['erro']="O usuário $usuario não existe ou senha está incorreta";
		header('Location: index.php');
	}

//Em caso negativo, reconduzir o usário para pagina anterior( index.php)

?>
