<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


	<style>
		
		.row{
		  
		}

		.texto{
		 }
		
		.imagem{
		 }	

		 .desktop-tablet h2{
			margin-top:0;
		 }

		 .desktop-tablet.row{
		 	margin-top: 4.854em;	
		 }

		 .desktop-tablet p.lead.preco{
		 	color: #238ABF;
		 }

		 button.visible-md{
		 	margin-top:-0.85em;
		 }



	</style>





</head>


<body>

<!-- container do bootratrap -->
<div class="container">
	
	<?php 

		/* 'Traduzindo' datas para o português*/
		setlocale(LC_TIME, 'pt_BR.utf-8', 'portuguese');

		include '../rotinas/proximo-passeio.php';
		include '../rotinas/limita-caracter.php';
		include '../rotinas/numero-dias-noites.php';
		include '../rotinas/menor-preco.php';

		/*Solicitando 10 passeios para proximopasseio($)*/
		$passeios = proximo_passeio(25);



		/*declarando variável vazia $ano-anterior e $mes-anterior*/
		$ano_anterior ='';
		$mes_anterior ='';

		/*loop para cada passeio*/
		foreach ($passeios as $key => $passeio) {
				
			/*Coletando ano*/
			$ano = date('Y',strtotime($passeio['inicio']));
			
			/*Coletando mes do passeio. A finalidade função utf8_encode é converter o resultado de strftime, codificado em ISO-8859-1 em UTF-8*/
			$mes = utf8_encode(strftime('%B',strtotime($passeio['inicio'])));

			/*Data de inicio e fim*/
			$data_inicio=date('d/m/Y',strtotime($passeio['inicio']));
			$data_fim = date('d/m/Y',strtotime($passeio['fim']));

			/*[condição] Se  $ano != $anoanterior*/

			if($ano!=$ano_anterior){

				echo "<h1>Saídas ".$ano."</h1>";

			}

			/*[condição] Se  $mes != $mes_anterior*/
			if($mes!=$mes_anterior){
			
				/*imprimindo mes*/
				echo "<h2>".$mes."</h2>";

			}
		
	?>


			<!--imprimindo box com informações do passeio-->
			
			<!-- Visível apenas em desktop e em tablets -->
			<div class=" desktop-tablet row visible-lg visible-md visible-sm">
				<div class="col-sm-7 texto">
					
					<!-- Visivel em  Desktop e Tablet-->
					
					<!-- Nome do passeio -->
					<h2><?php echo $passeio['nome_passeio']; ?></h2>

					<!-- Data -->
					<h4>
						<?php  

							/*Imprimir data de início*/
							echo date('d/m', strtotime($passeio['inicio']));
							
							/*Se o passeio tiver duração maior do que 1 dia, imprimir a data de fim e o número de dias e noites.*/	
							if(numero_dias($passeio['inicio'], $passeio['fim'])>1 && ($passeio['fim']!= NULL || $passeio['fim'] != '') ){
								echo 
									' a '.
									date('d/m', strtotime($passeio['fim'])).
									' - <b>'.
									numero_dias($passeio['inicio'], $passeio['fim'])
									.' e '.
									numero_noites($passeio['inicio'], $passeio['fim']).'</b>'; 
							}

							/*Senão, imprimir dia da semana em que ele ocorre*/
							else{
								$dia_semana = utf8_encode(strftime('%A',strtotime($passeio['inicio'])));
								echo ' - '.$dia_semana; 
							}	

						?> 
					</h4>
						
					
					<!-- Visivel só em  Desktop-->
					<div class="row hidden-sm">
						<p class="col-md-12 lead">
						
						<?php 
							echo limita_caracter(100,$passeio['por_que_ir'])."<a href=>Mais</a>";

						?>

					</p>
						<p class="lead col-md-12 preco">A partir de R$ <?php echo menor_preco($passeio); ?></p>

						<!-- Visíveis só em telas 'large' -->	
						<button class="visible-lg col-md-3 pull-right btn btn-default">Saiba mais!</button>			
						
						<!-- Visíveis só em telas 'médias' -->	
						<button class="visible-md col-md-3 pull-right btn btn-default">Saiba mais!</button>			
					</div>

					<!-- Visivel só em  Tablet-->
					<div class="row visible-sm">
						
						<p class="lead col-sm-12">
							<?php 
								echo limita_caracter(35,$passeio['por_que_ir'])."<a href=#>Mais</a>";
							?>
		 
							
						</p>
						
						<p class="lead col-sm-7 preco">A partir de R$<?php echo menor_preco($passeio); ?></p>
						<button class=" visible-sm col-sm-3 pull-right btn btn-default">Saiba mais!</button>
					
					</div><!-- row visible-sm -->
				
				</div><!-- col-sm-7 texto -->
			
				<div class="col-sm-5 imagem"><img src="../images/f1.jpg" alt="" class="img-responsive" /></div>
			
			</div><!-- desktop-tablet -->

			<!--Visível somente em celulares-->
			<div class="row visible-xs">
				<div class="col-xs-10 col-xs-offset-1">
					<h2 class="text-center">O Melhor do Rio</h2>			
					<h4 class="text-center">

						<?php  

							/*Imprimir data de início*/
							echo date('d/m', strtotime($passeio['inicio']));
							
							/*Se o passeio tiver duração maior do que 1 dia, imprimir a data de fim e o número de dias e noites.*/	
							if(numero_dias($passeio['inicio'], $passeio['fim'])>1 && ($passeio['fim']!= NULL || $passeio['fim'] != '') ){
								echo 
									' a '.
									date('d/m', strtotime($passeio['fim'])).
									' - <b>'.
									numero_dias($passeio['inicio'], $passeio['fim'])
									.' e '.
									numero_noites($passeio['inicio'], $passeio['fim']).'</b>'; 
							}

							/*Senão, imprimir dia da semana em que ele ocorre*/
							else{
								$dia_semana = utf8_encode(strftime('%A',strtotime($passeio['inicio'])));
								echo ' - '.$dia_semana; 
							}	

						?>

					</h4>
					
					<img src="../images/f1.jpg" alt="" class="img-responsive">
					<h4 class="text-center">A partir de R$ <?php echo menor_preco($passeio); ?></h4>
				</div>
			</div><!-- Visível somente em celulare -->



				

	<?php  

			/*atualizando $ano_anterior com o valor de $ano*/
			$ano_anterior = $ano;
			$mes_anterior = $mes;


			/*echo "$data_inicio<br>$data_fim<br><br>";	*/
		
		}/*fim do foerach (loop sobre o vetor do passeio)*/	


		$numero_segundos_um_dia=24*60*60;

		
	?>
</div><!-- container -->


</body>
</html>


