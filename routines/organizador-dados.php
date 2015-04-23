
<?php 

//TESTE

	/*$passeio=array('papai'=>'mamãe','valor_descricao_1'=>'idoso','valor_vista_1'=>1200,'valor_entrada_1'=>50,'valor_parcela_1'=>15,'valor_descricao_2'=>'criança','valor_vista_2'=>1000,'valor_entrada_2'=>100,'valor_parcela_2'=>1520,'valor_descricao_3'=>'artista','valor_vista_3'=>1203,'valor_entrada_3'=>152036,'valor_parcela_3'=>125698,'valor_descricao_4'=>'cadeirantes','valor_vista_4'=>12366548,'valor_entrada_4'=>12548,'valor_parcela_4'=>12563985,'partida_horario_1'=>'18:25','partida_local_1'=>'Manaus','partida_horario_2'=>'18:00','partida_local_2'=>'Parque Madureira');

	print_r(organizador_dado($passeio,'partida'));*/


/* recebendo variável $passeio, $caracterizador como argumento*/
function organizador_dado($passeio,$caracterizador){

/* 
	1) Filtragem das componentes do vetor passeio que tem a expressão dadas pelo $caracterizador

	OBS (IMPORTANTE !): cada variável do banco de dados referente a informação que queremos organizar tem que possui a expressão dada pelo valor do organizador

*/

	/* criando array $dados*/
	$dado = array();

	/* [loop] para cada componente do vetor $passeio (foreach($passeio as $chave => $conteudo))*/
	foreach ($passeio as $chave => $conteudo) {
	


		/* verificando se $chave (indice da componente) tem o a expressão $caracterizador*/
		if(preg_match('/'.$caracterizador.'/', $chave)){


			/* em caso afirmativo, criando uma componente para o array $dado com o índice da componente igual à $chave e com o conteudo igual variavel $conteudo.*/	
			$dado[$chave]=$conteudo;

		}	

			
	
	}


	/*2) com o vetor $dado formado, chega a hora de organiza-lo, de acordo com categorias (categoria_1, categoria_2...)*/

	/* criando vetor vazio $dado_organizado*/
	$dado_organizado = array();

	/* [loop] para cada componente do $dado*/
	foreach ($dado as $chave => $valor) {
		
		/* identificando  se o padrão chave é do tipos marcados pela expressão $carcaterizador e o respectivo indice (1, 2, 3, ...) e armazenando no array $matches (com a ajuda da função pre_match()).*/
		preg_match('/_(\w+)_(\d+)/', $chave, $matches);
		
		/*Coletando padrões identificados por preg_match
			
			IMPORTANTE! -  $matches[0] corresponde a todo o padrão e não a parte dele		

		*/
		$caracterizador_dado = $matches[1];
		$indice= $matches[2];

		/*Organizando preços*/
		$dado_organizado['categoria_'.$indice][$caracterizador_dado]  = $valor;

	}

		return $dado_organizado;

 }

 ?>

	