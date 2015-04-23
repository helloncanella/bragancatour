<?php 

	// TÍTULO: imprime-inicio-fim-passeio.php
	// DESCRIÇÃO: rotina que imprime data do inicio e fim do passeio no fomato '25 a 28 Fev | 3 dias e 2 duas noites' ou '25 Fev - quinta-feira' de acordo se o passeio tem um ou mais dias de acontecimento
	// 
	//TESTE:
	
	/*include '../setLocale.php';
	include '../numero-dias-noites.php';

	$inicio = '2015-02-12';
	$fim = '2015-06-13';
	
	echo imprime_inicio_fim_passeio($inicio,$fim).'<br><br>' ;


	$inicio = '2015-02-12';
	$fim = '2015-01-13';
	
	echo imprime_inicio_fim_passeio($inicio,$fim).'<br><br>';

	$inicio = '2015-02-12';
	$fim = '2015-02-13';
	
	echo imprime_inicio_fim_passeio($inicio,$fim).'<br><br>';

	$inicio = '2015-02-12';
	$fim = '2015-02-12';
	
	echo imprime_inicio_fim_passeio($inicio,$fim).'<br><br>';*/
	

	function imprime_inicio_fim_passeio($inicio,$fim){
		
		/*Verificando se a data do fim do passeio é posterior a do início. Caso isso ocorra imprimir mensagem de erro*/
		if (round(numero_dias($inicio, $fim))<= 0){
			$string = '<b>ERRO! ATENÇÃO</b> - a data do início é posterior a do fim <br> Corrija a informação no banco de dados';
		}
		
		/*Verificando se o passeio ocorre em dia único*/
		elseif (round(numero_dias($inicio, $fim))==1) {
			/*Imprimindo data*/
			$string = strftime("%d ",strtotime($inicio)).ucfirst(strftime("%b",strtotime($inicio))); 
			$string = $string." - ".ucfirst(utf8_encode(strftime("%A",strtotime($inicio))));
		}

		/*Verificando se o passeio em ocorre em mais de um dia*/
		else{
			/*Verificando o mes de inicio e o de fim*/
			$mes_inicio= strftime('%b',strtotime($inicio));
			$mes_fim= strftime('%b',strtotime($fim));	

			//[condicao] se $mes_inicio != $mes_fim
			if($mes_inicio!=$mes_fim){
				$string = strftime("%d ",strtotime($inicio)).ucfirst(strftime("%b",strtotime($inicio)));
				$string = $string." a ".$string = strftime("%d ",strtotime($fim)).ucfirst(strftime("%b",strtotime($fim)))." | ".numero_dias_noites($inicio,$fim); 
			}

			//[condicao] se $mes_inicio == $mes_fim
			else{
				$string = strftime("%d",strtotime($inicio));
				$string = $string." a ".$string = strftime("%d ",strtotime($fim)).ucfirst(strftime("%b",strtotime($fim)))." | ".numero_dias_noites($inicio,$fim); 
			}
		
			
		} 	
		
		return $string;
	}	

?>