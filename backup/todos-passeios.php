<?php 
	
	//Incluindo todas as rotinas já escritas para o projeto da bragancatour
		
		include 'routines/biblioteca-rotinas.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'include/head.inc' ?>	
</head>


<body id='todos-passeios'>
	

	<div class="page">
		
		<header id='header-padrao'> 	 	
			<?php include 'include/header.inc'; ?>
		</header>

		<main>
			<!-- container do bootratrap -->
			<div class="container">
				
				<?php

					//Procurando no banco de dados proximos passeios
					
					$passeios = proximo_passeio(25); 
					
					/*loop para cada passeio*/
					foreach ($passeios as $key => $passeio) {
							
						/*Coletando ano*/
						$ano = date('Y',strtotime($passeio['inicio']));
						
						/*Coletando mes do passeio. A finalidade função utf8_encode é converter o resultado de strftime, codificado em ISO-8859-1 em UTF-8*/
						$mes = utf8_encode(strftime('%B',strtotime($passeio['inicio'])));

						/*Coletando pasta de recursos (imagens e pdf)*/
						$diretorio=$passeio['pasta_recurso'];

						$imagens=retorna_arquivos('images/'.$diretorio,'jpg|jpeg|png|PNG');

						/*Coletando imagem com o nome 'principal'*/	
						foreach ($imagens as $nome_imagem) {
							if(preg_match('/principal/i', $nome_imagem)){
								$principal=$nome_imagem;
							}
						}	

						/*Data de inicio e fim*/
						$inicio=$passeio['inicio'];
						$fim = $passeio['fim'];

						/*[condição] Se  $ano != $anoanterior*/

						if($ano!=$ano_anterior){

							echo "<h1 class='col-xs-12'>Saídas ".$ano."</h1>";

						}

						/*[condição] Se  $mes != $mes_anterior*/
						if($mes!=$mes_anterior){
						
							/*imprimindo mes*/
							echo "<h2 class='col-xs-12'>".mb_strtoupper($mes, 'UTF-8')."</h2>";

						}
					
				?>


						<!--imprimindo box com informações do passeio-->
						
						<!-- Visível apenas em desktop e em tablets -->
						<div class=" desktop-tablet row visible-lg visible-md visible-sm">
							<div class="col-sm-7 texto">
								
								<!-- Visivel em  Desktop e Tablet-->
								
								<!-- Nome do passeio -->
								<h3><?php echo $passeio['nome_passeio']; ?></h3>

								<!-- Data -->
								<h4>
									<?php  

										echo imprime_inicio_fim_passeio($inicio,$fim);	

									?> 
								</h4>
									
								
								<!-- Visivel só em  Desktop-->
								<div class="row hidden-sm">
									
									<p class="col-md-12">
									
										<?php 
											echo limita_caracter(150,$passeio['por_que_ir'])."<a href='passeio.php?id=$passeio[passeioID]'>Mais</a>";

										?>

									</p>
									
									<p class="col-md-12 preco"><span>A partir de R$ <?php echo menor_preco($passeio); ?></span></p>

										
									<a href='passeio.php?id=<?php echo $passeio['passeioID']  ?>'><button class="col-md-3 pull-right btn btn-default">Saiba mais!</button></a>
								</div>

								<!-- Visivel só em  Tablet-->
								<div class="row visible-sm">
									
 									<p class="col-sm-7 preco"><span>A partir de R$<?php echo menor_preco($passeio); ?></span></p><br><br>
									<a href='passeio.php?id=<?php echo $passeio['passeioID']  ?>'><button class=" visible-sm col-sm-3 pull-right btn btn-default">Saiba mais!</button></a>
								
								</div><!-- row visible-sm -->
							
							</div><!-- col-sm-7 texto -->
						
							<div class="col-sm-5 imagem"><img src='images/<?php echo "$diretorio/$principal" ?>' alt="" class="img-responsive" /></div>
						
						</div><!-- end desktop-tablet -->

						<!--Visível somente em celulares-->
						<div class="mobile row visible-xs">
							<div class="col-xs-10 col-xs-offset-1">
								<h2 class="text-center"><?php echo $passeio['nome_passeio'] ?></h2>			
								<h4 class="text-center">

									<?php  

										echo imprime_inicio_fim_passeio($inicio,$fim);	

									?> 

									

								</h4>


								
								<a href='passeio.php?id=<?php echo $passeio['passeioID']  ?>'><img src='images/<?php echo "$diretorio/$principal" ?>' alt="" class="img-responsive"></a>
<!-- 								<h4 class="text-center">A partir de R$ <?php /*echo menor_preco($passeio);*/ ?></h4>
 -->							</div>
						</div><!-- Visível somente em celular -->



							

				<?php  

						/*atualizando $ano_anterior com o valor de $ano*/
						$ano_anterior = $ano;
						$mes_anterior = $mes;


						/*echo "$data_inicio<br>$data_fim<br><br>";	*/
					
					}/*fim do foerach (loop sobre o vetor do passeio)*/	


					$numero_segundos_um_dia=24*60*60;

				?>
			</div><!-- container -->
		
		</main>
				
				
		
		<footer id='footer'>
			<?php include 'include/footer.inc' ?>
		</footer> 		


	</div><!-- END .page -->

	
	<!-- Mmenu - plugin -->
	<nav id="menu">

		<?php include 'include/mmenu-padrao.inc' ?>

	</nav>




</body>
</html>


