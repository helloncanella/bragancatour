<?php 

	//TESTE
		/*include "../rotinas/retorna-arquivos.php";
		carrossel('../imagem/RIO');*/


	//OBJETIVO: a finalidade dessa rotina é criar um carrossel de  imagem a partir do recebimento do nome da pasta para qual se deseja criá-lo
	
	//IMPORTANTE: esse carrossel só funcionará com o framework bootstrap

	//3 TEMPOS 

	//PASSOS
	
		/*recebendo o nome da pasta como argumento*/
		function carrossel($pasta){
			

			/*chamar a função retorna arquivos, passando a ela o nome do diretório recebido por argumento e as extensões desejadas (no nosso caso jpg, jpeg, png). Armazenar em variável $imagens*/
			$imagens = retorna_arquivos($pasta,'jpg|jpeg|png');	

			/*armazenar primeira parte da string em variavel $primeira-parte-string*/

			/*imprimir primeiro arquivo do array $imagens ($imagens[0]) dentro de div.item.active*/
	

			/*A finalidade de, abaixo, por as imagens dentro do carrossel com largura de 100% é fazer com que ela ocupe toda o volume da caixa que as contém*/
			$primeira_parte ="
				
				<style>
					.carousel img{
						width:100%;
					}
				</style>	

				<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
					  
				  <!-- Wrapper for slides -->
				  <div class='carousel-inner' role='listbox'>
				    <div class='item active'>
				      <img src='".$pasta.'/'.$imagens[0]."' alt='...'>
					</div>		      
			";
						
			/*declar a existência de vetor 'segunda-parte'*/	
			$segunda_parte='';

			/*[loop] para cada item de imagens*/
			foreach ($imagens as $chave => $valor) {

				/*verficar se a chave é diferente de zero*/
				if($chave!=0){

					/* inserir item dentro de div.item e concatenar informação com a string segunda-parte anterior*/
					$segunda_parte= $segunda_parte."
									<div class='item'>
								      <img src='".$pasta.'/'.$imagens[$chave]."' alt='...'>
								    </div>										
					";

				}
			}

			/*armazenar controles do carrocel na string $terceira-parte*/
			$terceira_parte = "
								  <!-- Controls -->
								  <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
								    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
								    <span class='sr-only'>Previous</span>
								  </a>
								  <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
								    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
								    <span class='sr-only'>Next</span>
								  </a>
								</div>
							";

			$carrossel = $primeira_parte.$segunda_parte.$terceira_parte;

			return $carrossel;

		}


?>
