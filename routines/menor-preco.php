<?php 	
		

	/**
	 * @param $passeio [passeio cujos valores serão filtrados]
	 * @return $menor  [menor passeio]
	 */
	function menor_preco($passeio){
		$menor='';

		foreach ($passeio as $chave => $valor) {
			/*Verificando se a componente do $passeio em questão tem formato do preço e chave com expressão 'vista'(indicativo de preço cheio) */
			if(preg_match('/^\d+[,\.]\d{2}$/', $valor) && preg_match('/.+vista/', $chave)){
				if($menor == ''|| $valor<$menor){
					$menor=$valor;
				}			
			}
		}

		/*Trocando ponto por virgula no preço*/
		$menor = preg_replace('/\./', ',', $menor);
		return $menor;
	} 	



?>