
<!DOCTYPE html>
<html lang="en">

<head>
		
	<?php include 'include/head.inc' ?>

	<meta property="fb:admins"             content="100000763206487" />
	<meta property="og:url"                content="http://bragancatour.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<meta property="fb:app_id"             content="1540654036186926" />
	<meta property="og:title"              content="Bragança Tour" />
	<meta property="og:description"        content="Ajudando você a realizar seus sonhos" />
	<meta property="og:type"               content="article" />
	<meta property="og:image"              content="http://bragancatour.com/explorer/files/images/fernando-noronha-postal-quality-medium.jpg" />
	

</head>

<body id='index'>
	
	<?php include 'include/facebook.inc' ?>

	<?php 

		//Incluindo todas as rotinas já escritas para o projeto da bragancatour
		include 'routines/biblioteca-rotinas.php';

		//Procurando no banco de dados proximos passeios

		$passeios = proximo_passeio(3);

	
	?>	

	<!-- The page -->
	<div class="page">

		<header id='header-index'>

			<!-- Painel  -->
			<div class="container-fluid">
				<img id="painel" class='amaro' src="explorer/files/images/fernando-noronha-postal-quality-medium.jpg"  alt="">
			</div>

			<?php include 'include/header.inc'; ?>					

			<!-- Mmenu - Navegação tela-pequena -->
			<nav id="menu" class=''>

				<?php include 'include/mmenu-padrao.inc' ?>

			</nav>	

		</header><!-- header -->

		<main id='conteudo' class="container">
			<section id="proximos-destinos">
				<div class='row'>							
					<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-12 text-center">
						<h1 class=''>Próximos destinos</h1>
						<p class=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad illo nobis mollitia. Ex nemo quae vero, rem, magnam numquam repudiandae. Labore laborum officia corporis sint voluptatem est, odio quidem libero.</p><!-- fim do parágrafo descritvo -->
					
			
					</div>
				</div>


				<div class='row'>	
							
								
					<?php
							

					foreach($passeios as $key=>$passeio){


						$pasta = 'explorer/files/images/'.$passeio['pasta_recurso'];
						

						$nome = $passeio['nome_passeio'];
						$inicio = $passeio['inicio'];
						$fim = $passeio['fim'];
						$menor_preco = menor_preco($passeio);
						$numero_dias_noites = numero_dias_noites($inicio, $fim);
						$id = $passeio['passeioID'];

							
						$nome_todas_imagens = retorna_arquivos($pasta,'jpg|jpeg|png|PNG');

						foreach ($nome_todas_imagens as $nome_imagem) {

							if(preg_match("/^principal/i", $nome_imagem)){
								$foto_principal=$nome_imagem;
							}
						}

						$inicio_fim_passeio	= imprime_inicio_fim_passeio($inicio,$fim);

						$string = "

						<div class='col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 passeio'>
							<a href='passeio.php?id=$id'>
								<img src='$pasta/$foto_principal' class='img-responsive' alt=''>
							</a>	
							<div class='text-center'>
								<h3>$nome</h3>
								<p><b>$inicio_fim_passeio</b></p>    
								<p>a partir de R$ $menor_preco</p>				
							</div><!-- fim da descrição -->
						</div><!-- fim passeio -->

						";

						echo $string;}	

					
					?> 
				</div><!-- row -->
			</section><!-- Fim da section.rom#proximos-destinos  -->				

			<section id="nossa-familia" class='row'>
				<div class='col-sm-12 col-sm-offset-0 col-lg-10 col-lg-offset-1 hidden-xs text-center'>
					<h1>A nossa família</h1>
					<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

					<div id="carrossel">

						<?php

							$pasta_familia = 'explorer/files/images/familia';
							echo carrossel($pasta_familia); 
						?>
					</div>
				</div>
			</section>

			<section id="depoimentos" class='hidden-xs'>
				
				<h1 class='text-center'>Alguns depoimentos...</h1>

				<?php
					include "routines/carrossel-depoimento.php"; 
					$colunas_bootstrap = 12;
					echo carrossel_depoimento($colunas_bootstrap);
				?>
			</section>
		</main>

		<aside class='mmenu-items'>

			<section id="fale-conosco">
				<?php include 'include/mmenu/fale-conosco.inc' ?>
			</section>

			<section id="proximos-encontros">
				<?php include 'include/mmenu/proximos-encontros.inc' ?>
			</section>

			<section id="quem-somos">
				<?php include 'include/mmenu/quem-somos.inc' ?>
			</section>
		</aside>

		<footer id='footer'>
			<?php include 'include/footer.inc' ?>
		</footer> 	

	</div><!-- .page -->

</body>
</html>
