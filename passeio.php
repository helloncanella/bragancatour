<!DOCTYPE html>
<html lang="en">
	<head>

		<?php  

			/**
			 * ÍNDICE
			 *
			 * 0) Incluindo todas as rotinas já escritas para o projeto da bragancatour
			 * 1) Estabelecimento de conexão com o banco de dados e extrair passeio com id lido do browser
			 * 2) Coleta de informações relevantes sobre o passeio 
			 */


			//0) Incluindo todas as rotinas já escritas para o projeto da bragancatour
				
				include 'routines/biblioteca-rotinas.php';

			//1)Estabelecer conexão com o banco de dados e extrair passeio com id lido do browser 
			
				/*Configurar e abrir banco de dados*/
				include 'routines/dataBaseLibrary/config.php';
				include 'routines/dataBaseLibrary/opendb.php';

				/*Sanitizar (evitar SQL injection) dados coletados via POST ou GET*/
				$id = mysqli_real_escape_string($conn, $_GET['id']);
				
				/*Enuciar query*/
				$query = "SELECT *
							FROM passeios
							WHERE passeioID = $id";



				/*[condicao] Verificando se a query acima não tem problemas*/	
				if(mysqli_query($conn,$query)){
					/*Extrair e armazenar resultado do banco de dados com passeioID coletado*/
					$resultado = mysqli_query($conn,$query);
					
					/*Transformar dados coletados em chave associativa */
					$passeio = mysqli_fetch_assoc($resultado);
				}else{
					echo '<h1>Problemas ao imprimir esse passeio</h1>'.'<p>Vá em phpmyadmin e delete essa última inserção e informe o Hellon a ocorrência do seguinte problema: <br><br><b> '.mysqli_error($conn).'</b></p>';
				}

				/*Impressão de página 404. Ela será impressa caso durante a busca não seje encontrado passeio com id especificado*/
				if(empty($passeio)){
					echo "<h1>Erro 404: página não existe!</h1>";
					exit();
				}


				
			
		?>
		
		<?php include 'include/head.inc'; ?>
		
		<?php 

			//2) Coleta de informações relevantes sobre o passeio
				
				/*Estabelecendo informações locais como zona horarário e formato dos dias e das horas*/
				/*setlocale();*/

				$nome = $passeio['nome_passeio'];
				$inicio = $passeio['inicio'];
				$fim = $passeio['fim'];
				$por_que_ir = $passeio['por_que_ir'];
				$incluso = $passeio['incluso'];
				$nao_incluso = $passeio['nao_incluso'];
				$numero_parcelas = $passeio['numero_parcelas'];
				$precos = $passeio[''];
				$partida = $passeio[''];
				$informacoes_importantes = $passeio['avisos_importantes'];
				$pasta_recurso = $passeio['pasta_recurso']; 
			

		?>
		
		<!-- Facebook-->
		<meta property="fb:admins" content="100000763206487" />
		<meta property="og:url"                content="http://bragancatour.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
		<meta property="fb:app_id"             content="1540654036186926" />
		<meta property="og:title"              content="<?php echo $nome; ?>" />
		<meta property="og:description"        content="Estou pensando em ir. Vamos juntos?" />
		<meta property="og:type"               content="article" />
		<meta property="og:image"              content="http://bragancatour.com/images/<?php echo $pasta_recurso ?>/principal.jpg" />
		<meta property="og:image:width"        content="470" />
		<meta property="og:image:height"       content="290" />
		

	</head>
	<body id='passeio'>

		
		<?php include 'include/facebook.inc' ?>	

		
		
		<!-- MMENU - NOTA SOBRE ESTRUTURA

			A estrutura abaixo é diferente da convencional. Ela é necessária para o funcionamento do mmenu - menu deslizante, acionado quando a tela é pequena.

			A estrutura para funcionar, deve ser a seguinte: 



			<div class="page">
				
				<div class="header hidden-md hidden-lg">
					<a href="#menu">BOTÃO PARA ACIONAR</a>
				</div>

				<div class="content">
					
					CONTEUDO
		
				</div>

				<nav id="menu"> NAVEGAÇAO - O ID DEVE TER O MESMO NOME QUE O HREF DO ANCHOR <a> acima
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/about">About us</a>
						<ul>
							<li><a href="/about/history">History</a></li>
							<li><a href="/about/team">The team</a></li>
							<li><a href="/about/address">Our address</a></li>
						</ul>
						</li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</nav>

			
			</div>

		 -->	



		<!-- The page -->
		<div class="page">
			
			
			<header id='header-padrao'>

				<?php include 'include/header.inc'; ?>

			</header><!-- header -->

			<main class="content">

				<div class="container">			

					<div class='col-xs-12'>
						
						<!-- Título do Passeio -->
						<h1 class=""><?php echo $nome; ?></h1>	
						
						<div id="data-facebook">							
							<p class="lead">
								
									<?php
										echo imprime_inicio_fim_passeio($inicio,$fim);
													
									?>
								
							</p>
							

							<p class="fb-like" data-href="http://bragancatour.com<?php echo $_SERVER['REQUEST_URI']; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></p>
						
						</div>

					</div>
					
					<!-- Carrosel -->	
					<div class="col-xs-12 col-sm-offset-0 col-lg-10 col-lg-offset-1 text-center wrapper-carousel">
					
						<?php
							
							$pasta = 'images/'.$passeio['pasta_recurso'];
							
							/*Imprimindo carrossel*/ 	
							echo carrossel($pasta);
						
						?>
					</div><!-- Carrosel -->

						</div>
						<!-- Conteudo -->
						<article id="conteudo" class="col-xs-12">
							
							<!--  -->
							<section id="por-que-ir">
								
								<h2>Por que ir?</h2>
								<?php echo construcao_paragrafo($por_que_ir) ?>


							</section>

							<!-- Incluso no pacote -->
							<section id="incluso-pacote">
							
							<h2>Incluso no pacote</h2>
							<ul class="fa-ul">
								<?php 

									/*Atualizando $por_que_ir com vetor*/
									$por_que_ir = preg_split('/\n(?!\s+$)/', $incluso);

									foreach ($por_que_ir as $valor) {
											if(!empty($valor)){
												echo "<li><i class='fa-li fa fa-check'></i>".$valor."</li>";
											}
										}	


								?>
							</ul>
													

							</section><!--Incluso no pacote -->

							<!-- Não incluso no pacote -->
							<section id="nao-incluso">
					
								<h2>Não-incluído no pacote</h2>
								<ul class="fa-ul">
									<?php 

									/*Atualizando $nao_incluso com vetor*/
									$por_que_ir = preg_split('/\n(?!\s+$)/', $nao_incluso);


									foreach ($por_que_ir as $valor) {
											if(!empty($valor)){
												echo "<li><i class='fa-li fa fa-times'></i>".$valor."</li>";
											}
										}	
								?>
								</ul>

							</section>

							<!-- valores -->
							<section id="valores">
								
								<h2>Valores por pessoa</h2>
								<ul>
									<?php include 'include/passeio/valores.inc' ?>
								</ul>

							</section><!-- fim valores -->


							<!-- Formas de pagamento -->
							<section id="formas-pagamento">
					
								<h2>Formas de pagamento</h2>

								<div class="row">
									
									<!-- Depósito bancário -->
									<div class="col-sm-7">
										
										<h3>Depósito bancário</h3>	

										<div class="row">
											
											<!-- Bradesco -->
											<div class="banco col-xs-6" id="bradesco">
												<h4>Banco Bradesco</h4>
												<p>Agência: xxxxxxxx<br>
												Conta Poupança: xxxxxxx</p>
											</div><!-- FIM Bradesco -->
										
											<!-- Caixa -->
											<div class="banco col-xs-6" id="caixa">
												<h4>Caixa E. Federal e Lotéricas</h4>
												<p>Agência: xxxxxxxx<br>
												Conta Poupança: xxxxxxx</p>	
											</div><!--FIM Caixa -->		

										</div><!-- FIM Depósito bancário -->

									</div>
								
									<!-- Cartão de crédito -->
									<div class="col-sm-5">
										<h3>Cartão de crédito</h3>
											
											<h4>Aceitamos também</h4>								
											
											<div class="row">
												<div class="cartao">
													<div class="img">
														<img src="/images/cartao/visa.svg" alt="" title="Visa" class="cartao-1">
														<img src="/images/cartao/master_card.svg" alt="" title="Master Card" class="cartao-2">
														<img src="/images/cartao/american_express.svg" alt="" title="American Express" class="cartao-3">
													</div>
													<a href="http://goo.gl/jnbCbe">Ver lista completa</a>
												</div>
											</div>

											

									</div><!--FIM Cartão de crédito -->
								
								</div>			

							</section><!-- FIM Formas de pagamento -->


							<!-- Avisos Importantes -->
							<section id="avisos-importantes">
					

									

								<h2>Avisos Importantes</h2>
								<ul class="fa-ul">
									<?php 
										
									/*Atualizando $avisos_importantes com vetor*/
									$avisos_importantes = preg_split('/\n(?!\s+$)/', $passeio['avisos_importantes']);

									

									foreach ($avisos_importantes as $valor) {
											if(!empty($valor)){
												echo "<li><i class='fa-li fa fa-exclamation'></i>".$valor."</li>";
											}
										}
									
									?>
								</ul>

							</section><!-- FIM Avisos Importantes -->	
							
							<!-- saidas -->
							<section id="saidas">
								


								<h2>Saídas</h2>
								<ul>
									<?php include 'include/passeio/saidas.inc' ?>
								</ul>

								

							</section><!-- fim saidas -->	
						


							
							
							<!-- comentarios -->
							<section id="comentarios">
								
								
									<h2>Comentários</h2>
									<div class="fb-comments" data-href="http://bragancatour.com<?php echo $_SERVER['REQUEST_URI']; ?>" data-width="100%" data-numposts="100" data-colorscheme="light"></div>
									
								

							</section><!-- fim comentarios -->	



						</article><!-- Conteudo -->
					

				</div><!-- container -->

				

			</main><!-- .content -->

			
			<footer id='footer'>
				<?php include 'include/footer.inc' ?>
			</footer>	

		</div><!-- .page -->

		

		<!-- Mmenu - plugin -->
		<nav id="menu">
			<?php 	include 'include/mmenu-padrao.inc' ?>
		</nav>






	</body>
</html>