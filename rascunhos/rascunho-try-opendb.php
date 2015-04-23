<?php 	
		//Função - opendb
		function opendb($servername, $username, $password, $dbname){
			if(!$conn = mysqli_connect($servername, $username, $password, $dbname)){
				throw new Exception("Conexão não foi aberta");
					
			}
			
			return $conn = mysqli_connect($servername, $username, $password, $dbname);		
		}

		try{
			$conn = opendb($servername1, $username1, $password1, $dbname);
		}catch(Exception $e){
			try{
				$conn=opendb($servername2, $username2, $password2, $dbname2)
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}	
			



?>