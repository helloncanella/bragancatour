<style>
	
	.mm-menu .lead{
		font-size:1.2em;
	}

	.mm-menu h3{
		color:inherit;
	}

	#mm-0>li>em{
		display:none;
	}
	
	
	/*..mm-list, .mm-noresultsmsginput, input, textarea{
		font-size: 1em;
	}

	.mm-noresultsmsg.mm-opened{
		padding-top:1em !important;
	}

	.mmenu .lead{
		font-size:1.4em;
	}
	
	.mmenu a{
		
	}
		
	@media all and (max-width:300px){
		.mm-list, .mmenu input, .mmenu .form-control{
			font-family: 'raleway';
		    line-height: 1.62em;
		    margin: 0px 0px .382em 0px;
		 }
	}*/
	

	

</style>

<ul class="mmenu">
	<li><a href="index.php">Início do site</a></li>
	
	<!-- Mostrar nome do passeio caso apenas se estiver na pagina passeio.php -->
	<?php if(preg_match('/passeio.php/', $_SERVER['REQUEST_URI'])){ ?>
		<li><a href='passeio.php?id=<?php echo $id  ?>'><?php echo $nome; ?></a>
		
			<ul>
				<li><a href='#por-que-ir'><b>Por que ir?</b></a></li>
				<li><a href='#incluso-pacote'><b>Incluso no pacote</b></a></li>
				<li><a href='#nao-incluso'><b>Não-incluído no pacote</b></a></li>
				<li class='mm-opened'><a href=''><b>Valores</b></a>
					<ul>
						<?php include 'include/passeio/valores.inc' ?>
					</ul>
				</li>
				<li class='mm-opened'><a href='#avisos-importantes'><b>Formas de pagamento</b></a>
						<ul>
							
							<li><a href="">Depósito bancário</a>
								<ul>
									<li><a href=""></a></li>
								</ul>
							</li>
							
							<li><a href="">Cartão de crédito</a>
								<ul>
									<li><a href=""></a></li>
								</ul>
							</li>
						
						</ul>					
				</li>
				<li><a href='#avisos-importantes'><b>Avisos importantes</b></a></li>
			</ul>


		</li>
	<?php } ?>

	<!-- Caso o usuário estiver na pagina 'todos-passeios.php' a aba 'próximos destinos estará aberta' -->
	<li id='proximos-destinos'<?php if(preg_match('/todos-passeios.php/', $_SERVER['REQUEST_URI'])){?>	class='mm-opened'<?php } ?>>

		<a href="todos-passeios.php">Próximos Destinos</a>
		<!-- Imprimindo agenda de viagens	-->
		<ul><?php echo imprime_agenda();?></ul>
	
	</li>

	<li><a href="#mm-7">Próximos encontros</a>
		
		<ul>
			<div class='container' style='max-width:100%'>
				<li>
					<?php $data_encontro = proximo_encontro(); ?>
					
					<p class=""> <b><?php echo $data_encontro;?></b> - 13:00 - Niterói -  Shopping BayMarket</p>
	
					<p class=""> <b><?php echo $data_encontro;?></b> - 18:00 - São Gonçalo -  Shopping BayMarket</p>
					

				</li>
			</div>
		</ul>

	</li>
	

	<!-- Fale Conosco -->
	<li id='fale-conosco-mmenu' class='mm-opened'><a href="#mm-8">Fale Conosco</a>
		<ul>
			<div class='container' style='max-width:100%'><li style="overflow: auto;"><h3>Fale Conosco</h3><p style='margin-bottom:0.618em'></p><form class='' action=''><!--Nome--><div class='form-group'><!--  <label for='name'>Seu nome</label> --><input type='text' class='form-control' placeholder='Seu nome' required/></div><!--Nome--><div class='form-group'><!-- <label for='email'>Seu e-mail</label> --><input type='email' id='email' class='form-control' placeholder='E-mail (opcional)' required =''/></div><!--Nome--><div class='form-group'><!-- <label for='telefone'>Seu telefone</label> --><input type='text' class='form-control' placeholder='Telefone' required/></div><!--Nome--><div class='form-group'><!--  <label for='mensagem'>Mensagem</label> --><textarea name='mensagem' placeholder='Sua mensagem' id='mensagem' class='form-control' rows='5' required ></textarea></div><button type='submit' name='enviar' class='pull-right btn btn-default'>Enviar</button></form></li></div>
		</ul>	
	</li>

	

	
</ul>