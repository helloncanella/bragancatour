<?php  
	//TÍTULO: opendb.php
	//FINALIDADE: abrir banco de dados e retornar index de conexão ($conn)

	//TESTE
	/*$servername1 = "127.0.0.1";
	$username1 = "hellon";
	$password1 = "amadeus"; 
	$dbname1 = "bragancatour"; 

	$servername2 = "helloncanella.ipagemysql.com";
	$username2 = "administrador";
	$password2 = "Mateuscm53*";
	$dbname2 = "bragancatour";*/ 
	
	//TESTE
	echo "<h1>Aqui</h1>	";	

	if(opendb($servername1, $username1, $password1, $dbname1) || opendb($servername2, $username2, $password2, $dbname2) ){
		echo '';
	}else{
		echo '<h1>Falha na abertura do banco de dados</h1>';
	}	
	

	function opendb($servername, $username, $password, $dbname){

		// Creating connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		/*Estabelecendo o UTF-8 como charset padrão*/
		mysqli_query($conn,"SET NAMES 'utf8'");
		mysqli_query($conn,'SET character_set_connection=utf8');
		mysqli_query($conn,'SET character_set_client=utf8');
		mysqli_query($conn,'SET character_set_results=utf8');

		return $conn;	
	}


?>
