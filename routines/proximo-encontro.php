<?php 
	
	
	function proximo_encontro(){
		/*Verificando data e hora atual*/
		$data_hora_atual = time();

		/*Verificando se a  indexação do horario atual (em segundos) é menor do que a do que a de 18:00 da segunda 2º feira desse mês.*/
		if($data_hora_atual<strtotime("second monday of this month 18:00")){

			return utf8_encode(strftime('%d/%m/%Y',strtotime("second monday  of this month"))) ;
		
		}else{
			return utf8_encode(strftime('%d/%m/%Y',strtotime("second monday of  next month")));
		}	
	
	}

	

	





 
?>