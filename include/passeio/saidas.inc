<?php 
	
	/*Teste*/									
	$saidas = organizador_dado($passeio,'partida');


	/*$preco = organizador_dado($passeio,'valor');
	var_dump($saidas);	echo "<br><br>";
	var_dump($preco);	*/
		

	foreach ($saidas as $saida) {

		$saida['horario'] = preg_replace('/:00$/', ' ', $saida['horario']);	
		
		if(!empty($saida['local'])){	
			echo " 
			
				<li>
					<span style='font-weight:600;'>".$saida['horario']."-</span>  ".ucfirst($saida['local'])."
				</li>"
			;		
		}		
	}

?>