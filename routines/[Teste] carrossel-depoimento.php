<!-- teste -->
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


		
		<link rel="stylesheet" href='../plugins/bootstrap-3.3.2/dist/css/bootstrap.min.css'>
		<link rel="stylesheet" href="../plugins/bootstrap-3.3.2/dist/css/bootstrap-theme.min.css">
		<script src="../plugins/bootstrap-3.3.2/dist/js/bootstrap.min.js"></script>

		</style>	


	</head>
	<body>

		<div class="container">	
			<?php echo carrossel_depoimento(); ?>
		</div>
	</body>
	</html>




	





<?php 

	//TÍTULO:


	
		/*recebendo o nome da pasta como argumento*/
		function carrossel_depoimento(){

			//Array de depoimentos			
			$depoimentos = array(	
									'pessoa_1' => array(	
														'nome' => 'D. Fulana', 
														'cidade' => 'São Gonçalo',
														'depoimento' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum dolore recusandae reprehenderit laudantium nostrum, natus molestiae! Nam, quo excepturi eveniet!', 	
														'imagem' => '../images/pessoas/joana.jpg', 
													),	


									'pessoa_2' => array(	
														'nome' => 'Beltrana', 
														'cidade' => 'Rio de Janeiro',
														'depoimento' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quo, enim, rem eligendi molestias vel velit eum tenetur ab sed incidunt culpa nemo dolorum harum.',  	
														'imagem' =>'../images/pessoas/maria.jpg'
													),


									'pessoa_3' => array(	
														'nome' => 	'D. Ciclana', 
														'cidade' => 'Niterói',
														'depoimento' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis eligendi culpa sequi tenetur cumque dolor aperiam repellendus ipsa.', 	
														'imagem' =>'../images/pessoas/d.fulana.jpg'
													),	


									'pessoa_4' => array(	
														'nome' => 'D.fulana e Sr. fulano', 
														'cidade' => 'São Gonçalo',
														'depoimento' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. ', 	
														'imagem' =>'../images/pessoas/d.fulana_sr.fulano.jpg'
													),		
								);	


			/*armazenar primeira parte da string em variavel $primeira-parte-string*/

			/*imprimir primeiro arquivo do array $imagens ($imagens[0]) dentro de div.item.active*/
	

			
				


			/*A finalidade de, abaixo, por as imagens dentro do carrossel com largura de 100% é fazer com que ela ocupe toda o volume da caixa que as contém*/

				/*Dados primeira pessoa*/
				$nome = $depoimentos['pessoa_1']['nome'];
				$cidade = $depoimentos['pessoa_1']['cidade'];
				$depoimento = $depoimentos['pessoa_1']['depoimento'];
				$imagem = $depoimentos['pessoa_1']['imagem'];


			$primeira_parte ="
				
							
				<div id='carrossel-depoimento' class='carousel slide' data-ride='carousel'>
					  
				  <!-- Wrapper for slides -->
				  <div class='carousel-inner' role='listbox'>
				    <div class='item active'>
			    	  	
						<div class='conteudo-flex'>
							
							<p class='depoimento lead text-center'>
								$depoimento
							</p>
							<div class='pessoa'>
							
								<a class='left carousel-control' href='#carrossel-depoimento' role='button' data-slide='prev'>
										<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
										<span class='sr-only'>Previous</span>
									</a>


								<div class = 'dados'>			
									<div class='imagem'>
										<img src=$imagem alt='' class='img-responsive img-circle'>
									</div>	
										
									<div class='nome'><p class='lead'>$nome <br>$cidade</p></div>
									</div>
								 

								<a class='right carousel-control' href='#carrossel-depoimento' role='button' data-slide='next'>
									<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
									<span class='sr-only'>Next</span>
								</a>	
								
							
							</div>


						</div>			

					</div>		      
			";
						
			/*declar a existência de vetor 'segunda-parte'*/	
			$segunda_parte='';

				
			/*[loop] para cada item de imagens*/
			foreach ($depoimentos as $chave => $valor) {

				/*Dados de cada uma das pessoas do vetor $depoimentos*/
				$nome = $depoimentos[$chave]['nome'];
				$cidade = $depoimentos[$chave]['cidade'];
				$depoimento = $depoimentos[$chave]['depoimento'];
				$imagem = $depoimentos[$chave]['imagem'];	

				/*verficar se a chave é diferente de zero*/
				if($chave!=='pessoa_1'){

					/* inserir item dentro de div.item e concatenar informação com a string segunda-parte anterior*/
					$segunda_parte= $segunda_parte."
									<div class='item'>
								      	<div class='conteudo-flex'>
											<p class='depoimento lead text-center'>
												$depoimento
											</p>
											<div class='pessoa'>
											
												<a class='left carousel-control' href='#carrossel-depoimento' role='button' data-slide='prev'>
														<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
														<span class='sr-only'>Previous</span>
													</a>


												<div class = 'dados'>			
													<div class='imagem'>
														<img src=$imagem alt='' class='img-responsive img-circle'>
													</div>	
														
													<div class='nome'><p class='lead'>$nome <br>$cidade</p></div>
													</div>
												 

												<a class='right carousel-control' href='#carrossel-depoimento' role='button' data-slide='next'>
													<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
													<span class='sr-only'>Next</span>
												</a>	
												
											
											</div>


										</div>						      
								    </div>										
					";

				}
			}

			/*armazenar controles do carrocel na string $terceira-parte*/
			$terceira_parte = "
						
				
					
						  	
								
					</div>			

							";

			$carrossel = $primeira_parte.$segunda_parte.$terceira_parte;

			return $carrossel;

		}


?>


<script>

$(function(){

	$('.carousel').carousel({
	  interval: 3000
	})

});


</script>


<!-- Customização controle -->
<style>

.carousel-control, .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right{
	position: static;
}

.carousel-control.right, .carousel-control.left {
    background-image: none;
 }


 @media all and (max-width: 500px) {
	.conteudo-flex{

		width:100%;
		margin:0 auto;


	}
}

@media all and (min-width: 500px) {
	.conteudo-flex{
		width:60%;
		margin:0 auto;
	}
}


.pessoa{
	display:flex;
	flex-direction:row;
	flex-wrap:wrap;
	justify-content:space-between;
	margin-top:3.36%;
	align-items:center;
}

.imagem{
	max-width:25%;

}

.nome{
	padding-left:1.618%;
	
}

.lead{
	margin:0;
}


.controle{
	display:flex;
	flex-direction:row;
	flex-wrap:wrap;
	justify-content:flex-end;
}

.dados{
	display:flex;
	flex-direction:row;
	flex-wrap:wrap;
	align-items:center;
	width:61.8%;
	justify-content:center;

}

.carousel-control{
	text-align: left;
	width:auto;
	display: table;
}


.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev{
	margin: 0;
}

.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next{
	margin:0;
}
