<?php 
										
	$precos = organizador_dado($passeio,'valor');
	


	foreach ($precos as $preco) {

		/*Trocando virgula por ponto no preço*/
		foreach ($preco as $chave => $valor) {
				if(preg_match('/\./',$preco[$chave])){
					
					$preco[$chave]=preg_replace('/\.(\d+)$/',',\1', $preco[$chave]);
				}
		}	

		if(!empty($preco['descricao'])){	
			echo " 
			
				<li>
					<span style='font-weight:600;'>".ucfirst($preco['descricao']).":</span> R$".$preco['vista']."<strong> à vista</strong> ou <strong> entrada </strong>de R$".$preco['entrada']." + <strong>".$passeio['numero_parcelas']."x </strong>R$".$preco['parcela']."
				</li>"
			;		
		}		
	}

?>