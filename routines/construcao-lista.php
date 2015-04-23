<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		
	<title>Document</title>

	<!-- Font Awasome -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<ul class="fa-ul">
	<?php
		//TESTE
		$string = 'mamae';

		 construcao_lista($string,'<i class="fa-li fa fa-check">');

	?>
	</ul>

</body>
</html>


<?php 




//ROTINA contrucao-lista.php


	//OBJETIVO: a finalidade da rotina é receber um uma string e transformá-las em lista, a partir da identificação de quebras de linha


	//PASSOS

		/*receber $string a ser 'listizada' e  algum acopanhamento (geralmente script de um glyphicon)[opcional] como argumento*/
		function construcao_lista($string,$acompanhento){

/*			- criar array de palavras a partir da quebra da lista, utilizando como delimitador a quebra de linha
*/
			/*[loop] para cada item de do array anterior*/		
			foreach ($variable as $key => $value) {

				/* se o item anterior não for vazio*/
				if(!empty($string_quebrada)){
					/*identificar padrão 'inicio de linha' e substituí-la por '<li>'.$acompanhamento (íncio de lista em HTML)*/
					$string = preg_replace('/^/', '<li>'.$acompanhento, $string);
					
					/*identificar padrão 'fim de linha' e substituí-la por por </p> (íncio de lista em HTML)*/
					$string = preg_replace('/$/', '</li>', $string);
				}
			
			}	
			/*retornar $string*/
			return $string;	
		}



?>