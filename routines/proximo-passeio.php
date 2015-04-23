<?php 

	/**
	 * [proximo_passeio função que 'entrega' dados dos próximos passeios]
	 * 
	 * @param $quantidade_desejada_proximo_passeio - quantidade de proximos passeios exigidas
	 *   
	 * @return $dados_proximos_passeios - dados dos passeios mais próximos, extraídos do banco de dados
	 */
	

	//TESTE
	
	/*$passeios = proximo_passeio(5);
	var_dump($passeios);
		*/

	function proximo_passeio($quantidade_desejada_proximo_passeio){
		
		/*'Traduzindo' as datas para o português*/
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

		/*Estabelecendo a zona-horária para o brasil*/
		date_default_timezone_set('America/Sao_Paulo');
		
		/*Abrindo banco de dados*/
		include 'dataBaseLibrary/config.php';
		include 'dataBaseLibrary/opendb.php';

		//ENUNCIADO DA QUERY		
		/**
		 * [$query enuncia qual será a busca que será feita no banco de dados. 
		 * 
		 * No caso em tela, busca-se os passeios cujas datas (expressa por 'inicio') são maiores do que a data corrente 
		 * 
		 * O Número de passeios a ser exibido é limitado pelo argumento da função proximo_passeio] 
		 */
		$query="SELECT * FROM passeios
			WHERE inicio>CURDATE()
			ORDER BY inicio	
			LIMIT ".$quantidade_desejada_proximo_passeio;
	
		

		/*Busca no Banco de dados*/	
		$resultado = mysqli_query($conn,$query);	

		//Verificando se há erros	
		if(mysqli_error($conn)){
			echo 'Erro do arquivo proximo-passeio.php: '.mysqli_error($conn).'<br>';
		}

		/**
		 * [$dados_proximos_passeios - Vetor com os dados dos passeios mais proximos]
		*/
		
		//Teste
		if(empty($resultado)){
			echo 'vazio<br>';
		}

		/*$dados_proximos_passeios = mysqli_fetch_assoc($resultado);*/
		while($row=mysqli_fetch_assoc($resultado)){
			$dados_proximos_passeios[]=$row;
		}

		/*Fechando banco de dados*/	
		include 'dataBaseLibrary/closedb.php';


		/*Retornando dados dos passeios*/
		return $dados_proximos_passeios;

	}


	





?>