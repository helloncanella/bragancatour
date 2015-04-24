<!-- Página de confirmação do passeio -->

<h1>Página de Confirmação</h1>

<p>Verifique se os dados inseridos estão corretos. </p>

<p>Caso a sinta a necessidade de alterá-los aperte o botão "voltar" no canto superior esquerdo do browser.</p>

<p>Caso esteja tudo ok, aperte o botão "Gerar Passeio". Lembre-se que essa decisão deve ser definitiva.</p>	


<form method="get" action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?>>

	<h2>Pasta onde a imagem  o pdf do roteiro estão localizada</h2>

	<p>
		<b>Pasta</b> <br> <?php echo 'imagem/'.$_POST['pasta_recurso']?>
		
	</p>	


	<h2>Informações sobre destino</h2>

	<p>
		<b>Nome do Passeio*</b> <?php  echo $_POST['nome_passeio']?>
		
	</p>

	
	<p>
		<b>Inicio</b> <?php echo $_POST['inicio']?>
	</p>

	
	<p>
		<b>Fim</b> <?php echo $_POST['fim']?>
	</p>

	<p>
		<b>Por que ir?</b> <?php echo $_POST['por_que_ir']?>
	</p>


	<p>
		<b>PDF do Roteiro</b> <?php echo $_POST['pdf_roteiro']?>
	</p><br>

	<h2>Informações sobre pacote</h2>

	<br><h3>Benefícios incluídos e não-incluídos</h3>

	<p>
		<b>Incluso</b><br> <?php echo $_POST['incluso']?>
	</p>


	<p>
		<b>Não-incluso</b><br> <?php echo $_POST['nao_incluso']?>
	</p>

	<br><h3>Informações sobre preços</h3>

	<p>
		<b>Número de parcelas do parcelamento</b> <?php echo $_POST['numero_parcelas']?>
	</p>

	<p>
		<b>Formas de pagamento</b> <?php echo $_POST['forma_pagamento']?>
	</p>				


	<br><h4>Modalidade de Preço 1</h4>

	<p>
		<b>Descrição</b> <?php echo $_POST['valor_descricao_1']?>
	</p>


	<p>
		<b>Valor à vista</b> <?php echo $_POST['valor_vista_1']?>
	</p>

	<p>
		<b>Valor da parcela</b> <?php echo $_POST['valor_parcela_1']?>
	</p>

	
	<p>
		<b>Valor da entrada</b> <?php echo $_POST['valor_entrada_1']?>
	</p>

	<br><h4>Modalidade de Preço 2</h4>	


	<p>
		<b>Descrição</b> <?php echo $_POST['valor_descricao_2']?>
	</p>


	<p>
		<b>Valor à vista</b> <?php echo $_POST['valor_vista_2']?>
	</p>

	<p>
		<b>Valor da parcela</b> <?php echo $_POST['valor_parcela_2']?>
	</p>

	
	<p>
		<b>Valor da entrada</b> <?php echo $_POST['valor_entrada_2']?>
	
	</p>

	
	<br><h4>Modalidade de Preço 3</h4>

	<p>
		<b>Descrição</b> <?php echo $_POST['valor_descricao_3']?>
		
	</p>


	<p>
		<b>Valor à vista</b> <?php echo $_POST['valor_vista_3']?>
		
	</p>

	<p>
		<b>Valor da parcela</b> <?php echo $_POST['valor_parcela_3']?>
		
	</p>

	
	<p>
		<b>Valor da entrada</b> <?php echo $_POST['valor_entrada_3']?>
		
	</p>

	<br><h4>Modalidade de Preço 4</h4>
	<p>
		<b>Descrição</b> <?php echo $_POST['valor_descricao_4']?>
		
	</p>


	<p>
		<b>Valor à vista</b> <?php echo $_POST['valor_vista_4']?>
		
	</p>

	<p>
		<b>Valor da parcela</b> <?php echo $_POST['valor_parcela_4']?>
		
	</p>

	
	<p>	
		<b>Valor da entrada</b> <?php echo $_POST['valor_entrada_4']?>
	</p>

	<br><h4>Modalidade de Preço 5</h4>
	<p>
		<b>Descrição</b> <?php echo $_POST['valor_descricao_5']?>
		
	</p>


	<p>
		<b>Valor à vista</b> <?php echo $_POST['valor_vista_5']?>
		
	</p>

	<p>
		<b>Valor da parcela</b> <?php echo $_POST['valor_parcela_5']?>
		
	</p>

	
	<p>
		<b>Valor da entrada</b> <?php echo $_POST['valor_entrada_5']?>
		
	</p>


	<br><h4>Modalidade de Preço 6</h4>

	<p>
		<b>Descrição</b> <?php echo $_POST['valor_descricao_6']?>
		
	</p>


	<p>
		<b>Valor à vista</b> <?php echo $_POST['valor_vista_6']?>
		
	</p>

	<p>
		<b>Valor da parcela</b> <?php echo $_POST['valor_parcela_6']?>
		
	</p>

	
	<p>
		<b>Valor da entrada</b> <?php echo $_POST['valor_entrada_6']?>
		
	</p><br>


	<br><h3>Informações Gerais</h3>

	<p>
		<b>Avisos importantes</b> <br> <?php echo $_POST['avisos_importantes']?>
		
	</p><br>

	<br><h3>Sobre a saída</h3>

	<p>
		<b>Data da partida</b> <?php echo $_POST['data_partida']?>
		
	</p>

	<br><h4>Partida 1</h4>

	<p>
		<b>Local de partida 1</b> <br> <?php echo $_POST['local_partida_1']?>
		
	</p>

	<p>
		<b>Hora da partida 1</b> <br> <?php echo $_POST['hora_partida_1']?>
		
	</p>

	<br><h4>Partida 2</h4>

	<p>
		<b>Local de partida 2</b> <br> <?php echo $_POST['local_partida_2']?>
		
	</p>


	<p>
		<b>Hora da partida 2</b> <br> <?php echo $_POST['hora_partida_2']?>
		
	</p>

	<br><h4>Partida 3</h4>			

	<p>
		<b>Local de partida 3</b> <br> <?php echo $_POST['local_partida_3']?>
		
	</p>

	<p>
		<b>Hora da partida 3</b> <br> <?php echo $_POST['hora_partida_3']?>
		
	</p>

	<br><h4>Partida 4</h4>

	<p>
		<b>Local de partida 4</b> <br> <?php echo $_POST['local_partida_4']?>
		
	</p>

	<p>
		<b>Hora da partida 4</b> <br> <?php echo $_POST['hora_partida_4']?>
		
	</p>
	
	<br><h4>Partida 5</h4>

	<p>
		<b>Local de partida 5</b> <br> <?php echo $_POST['local_partida_5']?>
		
	</p>

	<p>
		<b>Hora da partida 5</b> <br> <?php echo $_POST['hora_partida_5']?>
		
	</p>

	<br><h4>Partida 6</h4>

	<p>
		<b>Local de partida 6</b> <br> <?php echo $_POST['local_partida_6']?>
		
	</p>

	<p>
		<b>Hora da partida 6</b> <br> <?php echo $_POST['hora_partida_6']?>
		
	</p>
	
	
	<input type="submit" name="passeio_gerado" value="Gerar Passeio!" >

</form><!-- Fim do Form -->