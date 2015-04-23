<?php  

//TESTE
/*
	$diretorio='../images';
	$extensao='jpg|jpeg';
	$arquivos_filtrados = retorna_arquivos($diretorio,$extensao);

	var_dump($arquivos_filtrados);
*/

//ROTINA retorna-arquivos

//OBJETIVO: a finalidade dessa rotina será de a de retornar um array com o nome de arquivos de um diretório com uma determinada extensão. Seus argumentos serão o nome do diretório e o da extensão desejada


//ETAPAS

//1) usando função adequada, armazenando em array o nome de todos os arquivo*/

	/*recebendo nome de diretório e de extensão*/
	function retorna_arquivos($diretorio,$extensao){

		/*fazendo busca no diretório usando a função scandir($) e armazenando resultado em variável com o nome $arquivo*/
		$arquivos = scandir($diretorio);

		//2) A partir do array anterior, criando outro só com extensão desejada*/
		
			/*criando array vazio $arquivos_filtrados*/
			$arquivos_filtrados = array();

			/*[loop] para cada item de $arquivos*/
			foreach ($arquivos as $chave => $valor) {
				
				/*[condição] o item em questão tem em seu valor a expressão '$extensao' (que pode ser pdf, jpg)?*/
				if(preg_match('/\.(?:'.$extensao.')/i', $valor)){
					
					/*armazenando item em um novo array*/
					$arquivos_filtrados[] = $valor;
				}	

			}

			
		//3) retornando arquivos filtrados					
		return $arquivos_filtrados;	

	}

		
?>



