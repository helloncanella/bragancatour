<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<!-- A rotina abaixo coleta somete os dados preenchidos no formulario do passseio -->

	<?php

		//Iniciando o uso de $_SESSION

		/*$root = $_SERVER['DOCUMENT_ROOT'];*/

		/*Configurations of the database*/
		$path = "../routines/dataBaseLibrary/config.php";
		include($path);

		/*Creating the database whose name is $conn*/	
		$path = "../routines/dataBaseLibrary/opendb.php";
		include($path);

		/********************************************
			Coleta dos dados do formulario em array 
		*********************************************/

		// A coleta dos dados só ocorrerá se o botão não for clicado (a insercao do botão de confirmacao pela inclusão da dos dados de 'confirmacao.php' que ocorrerá no final desse script)	

		if(!isset($_GET['passeio_gerado'])){
			
			/*Coleta de dados de arquivos ($_FILES)*/
			foreach ($_FILES as $key => $value) {
		
				/*Verificação dos dados dos arquivos. O trecho a seguir substitui caracteres proibidos pelo PHP
				
				O trecho será executado se o tamanho do arquivo for diferente de nulo.
				*/
			
				if($_FILES[$key]['size']){

					print($key."<br>");	

					//"Pegando" arquivo	
					$fileName = $_FILES[$key]['name'];
					$tmpName  = $_FILES[$key]['tmp_name'];
					$fileSize = $_FILES[$key]['size'];
					$fileType = $_FILES[$key]['type'];


					//verificando se no interior do blob ("arquivo") não há nenhum caracter proibido pelo php	
					$fp      = fopen($tmpName, 'r');
					$content = fread($fp, filesize($tmpName));
					$content = addslashes($content);
					fclose($fp);
		
				}		
	
				//Coletando conteudo para inserção do arquivo no banco de dados			
				$_SESSION[$key] = $content;	
			
			}

			/*Coleta de dados textuais ($_POST)*/	
			foreach($_POST as $key=>$value) {
				$_SESSION[$key] = $value;
				

				/*Substituindo campos $SESSION[$key] que correspodem à data com formato dd/mm/YYYY pela forma YYYY-MM-DD utilizada pelo banco de dados*/ 
				if(preg_match("/(?:\d+\/){2}\d{4}/", $_SESSION[$key])){

					$data=$_SESSION[$key];
					
					$padrao='/(\d{2})\/(\d{2})\/(\d{4})/';

					$substituicao ='\3-\2-\1';

					$_SESSION[$key] = preg_replace($padrao, $substituicao, $data);

					

				}
					

			}

		}

		/**********************************************************
		INSERÇÃO DE DADOS NO BANCO DE DADOS
		
			A rotina a seguir vai ser executada apenas depois do meu pai ou o vitor visualizarem os dados inseridos e tiverem certeza de que os dados inseridos estão corretos
		
		*********************************************************/
		
		if(isset($_GET['passeio_gerado'])){

			//Query ("Pegar" todos os dados da tabela)	
			$query = mysqli_query($conn,"SELECT * FROM passeios");

			//Verificando se há erros	
			if(mysqli_error($conn)){
				echo mysqli_error($conn);
			}

			//Fazendo busca no banco de dados
			$resultado = mysqli_fetch_assoc($query);


			//Retornar um array com o nome das colunas
			$nome_colunas = array_keys($resultado);


			
			/*loop por todo o o vetor com o nome de colunas de tabelas, caso haja alguma chave associativa deste vetor com o mesmo no de uma das tabelas, usa -la para compor a declaração da query*/

			//Inicializando strings para inseri-las no query de inserção
			$colunas = array();
			$valores = array();

			foreach ($nome_colunas as  $value) {
			
				//Se existir algum vetor com a componente $value, compor query
				if(isset($_SESSION[$value]) && !($_SESSION[$value]=='')){
					$colunas [] = $value." , "; 	
					$valores [] = "'".$_SESSION[$value]."' , "; 	
				}
			}
			
			//A função implode($array) implode todo array do argumento em uma única string
			$colunas = implode($colunas);
			$valores = implode($valores);
			
			//trim serve para retirar caracter do inicio e final. Essa mudança serve para adequação de $colunas e $valores à sintaxe da query.
			$colunas = trim($colunas," ,");
			$valores = trim($valores," ,");

		
			$query2 = "
					
				INSERT INTO passeios ($colunas) VALUES ($valores); 	
			";						

			/*INSERT INTO passeios ($colunas) VALUES ($valores);*/ 

			mysqli_query($conn,$query2) or die(mysqli_error($conn));

			echo "<h1> Passeio gerado com sucesso! </h1><h2>Em caso de problemas cancele o passeio em phpmyadmin ou fale com o Hellon </h2>";

			/*Fechando bando de dados*/
			$path = "../routines/dataBaseLibrary/closedb.php";
			include($path);

			

			exit();

		}
		

	?>

	
	
	<?php include 'confirmacao.php' ?>


			

		

</body>
</html>

