<?php  
	//TÍTULO: opendb.php
	//FINALIDADE: abrir banco de dados e retornar index de conexão ($conn)

	//TESTE
	/*$servername = "127.0.0.1";
	$username = "hellon";
	$password = "amadeus"; 
	$dbname = "braganca_tour"; 

	if(opendb($servername, $username, $password, $dbname)){
		echo '<h1>Conexão aberta</h1>';
	}else{
		echo '<h1>Falha na abertura do banco de dados</h1>';
	}*/	

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


?>		