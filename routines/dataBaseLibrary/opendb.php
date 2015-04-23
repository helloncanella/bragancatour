<?php  
	//if the the local connection doesn't open, try the remote
	if(!($conn=mysqli_connect($servername2, $username2, $password2, $dbname2))) {

		$conn = mysqli_connect($servername1, $username1, $password1, $dbname1);
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
	}

	/*Estabelecendo o UTF-8 como charset padrão*/
	mysqli_query($conn,"SET NAMES 'utf8'");
	mysqli_query($conn,'SET character_set_connection=utf8');
	mysqli_query($conn,'SET character_set_client=utf8');
	mysqli_query($conn,'SET character_set_results=utf8');
?>