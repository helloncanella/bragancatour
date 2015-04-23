<?php 
	/**
	 * [limita_caracter - limita número de caracteres exibido no browser, conforme limite estabelecido pelo cliente da função]
	 * 
	 * @param  $numero_limite_caracter [numero limite de caracteres a ser retornado]
	 * @param  $string                 [string a ser esfacelada]
	 * @return $nova-string            [string reduzida acrescidade de reticências]
	 */
	function limita_caracter($numero_limite_caracter,$string){

		for($i=0;$i<=($numero_limite_caracter-1);$i++){
			$nova_string .= $string[$i];
		}

		return $nova_string.'...';
	
	}

?>

