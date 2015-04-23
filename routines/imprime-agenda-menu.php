<?php 
	
//TESTE
/*include 'proximo-passeio.php';
echo imprime_agenda();*/


	function imprime_agenda(){

		/*Solicita próximos passeios. O número de 50 passado no argumento é só para garantir que todos os próximos passeios serão armazenados no array $proximos_passeios*/
		$proximos_passeios = proximo_passeio(30);

		/*solicitar agenda de viagens, passando próximos passseios como argumento*/
		$agenda = agenda_viagens($proximos_passeios);

		/**FORMATO DO VETOR AGENDA
		 * A agenda retornada terá o seguinte formato
		 *
		 * $agenda = {
		 * 
		 * 	maio = {
		 * 				passeio_1 = {
		 * 								id =>
		 * 								destino = > 
		 * 							}
		 *				passeio_2 = {
		 * 								id =>
		 * 								destino = > 
		 * 							} 
		 * 			}
		 *
		 * 	junho = {
		 * 				passeio_1 = {
		 * 								id =>
		 * 								destino = > 
		 * 							}
		 *
		 *				passeio_2 = {
		 * 								id =>
		 * 								destino = > 
		 * 							} 
		 * 	   				
		 * 			}
		 * 
		 * }
		 * 
		 */
		
		/*Declarando a existência de string auxiliar*/
		$string='';

		/*[loop] para cada mes*/
		foreach ($agenda as $mes => $grupo_destinos) {
				
			/*armazenando string necessaria impressão do mes*/
			$string=$string."<li><span>".ucfirst($mes)."</span><ul>";
				
			/*[loop] para cada grupo de destinos do mes*/
			foreach ($grupo_destinos as $destino => $dados_destino) {
				/*imprimindo id e nome*/	
				$string =$string."
					<li>
						<a href='passeio.php?id=".$dados_destino['id']."'>".$dados_destino['nome']."</a>
					</li>";	
			}
				$string =$string."</ul></li>";

		}	
			
		return $string;
	}									 	

	//Função $agenda_viagens($proximos_passeios)
	function agenda_viagens($proximos_passeios){

		/*[loop] para cada passeio de $proximos_passeios*/
		foreach ($proximos_passeios as $passeio => $dados_destino) {
			
			/*extrair mes*/
			$mes = utf8_encode(strftime("%B",strtotime($dados_destino['inicio'])));

			/*extrair id*/
			$id = $dados_destino['passeioID'];

			/*extrari nome do destino*/
			$nome_destino = $dados_destino['passeioID']; 
			

			
			/*contabilizar numero de passeios no mes*/
				
				/*[condicao] se variavel que contabiliza numero de passeios no mes (${'index_'.$mes}) for nula*/
				if(${'index_'.$mes}==null){
					/*Iguala-la a 1*/	
					${'index_'.$mes}=1;
				}	
				
				/*[condicao] senão*/	
				else{
					/*incrementá-la em 1*/
					++${'index_'.$mes};
				}	
				/*armazenar informações extraidas em componente do mes de $agenda*/
				$agenda[$mes]['passeio_'.${'index_'.$mes}] = array('id'=>$dados_destino['passeioID'],
																	'nome'=>$dados_destino['nome_passeio']);	
					
		}
			

		return $agenda;
	}	
?>