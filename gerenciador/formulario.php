<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Novo Passeio</title>
	<!-- biblioteca da jquery -->
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>  

	<!-- biblioteca do datepicker -->
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

	<!-- css da biblioteca do datepicker -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


	<!-- Maskara -->
	<script src="js/jquery.mask.min.js" type="text/javascript"></script>
	

	<!-- script do datapicker e da maskara -->
	<script src="js/script-auxiliar.js" type="text/javascript"></script>
	

</head>
<body>
		
		<form id="formulario" action="insercao.php" method="post" enctype="multipart/form-data">
			
			<h1>Novo Passeio</h1>

			<fieldset>
			<legend>
				Por favor preencha o formulário abaixo com os dados do passeio. <b>Não use o firefox.</b>
			</legend>
			
			<h5>(*) Campos obrigatórios</h5>

			<h2>Pasta onde imagem e o pdf do roteiro estão localizados.</h2>
			<h4>O nome do arquivo do roteiro deve ser "roteiro.pdf"</h4>
			<p>
				<input name="pasta_recurso" type="text" placeholder="sem caracteres especiais" >
			</p>

			<h2>Informações sobre destino</h2>

			<p>
				<label for="nome_passeio">Nome do Passeio*</label>
				<input type="text" id="nome_passeio" name="nome_passeio" >
			</p>
		
			<p>
				<label for="inicio">Inicio*</label>
				<input type="text" class="datapicker" name="inicio" >
			</p>

			
			<p>
				<label for="fim">Fim*</label>
				<input type="text" class="datapicker" name="fim">
			</p>

			<p>
				<label for="introducao">Introdução* (campanha e-mail)</label><br>
				<textarea type="text" class="" name="introducao" cols="35" rows="10"></textarea>
			</p>

			<p>
				<label for="por_que_ir">Por que ir?*</label><br>
				<textarea name="por_que_ir" cols="35" rows="10" ></textarea>
			</p>


			<h2>Informações sobre pacote</h2>

			<h3>Benefícios incluídos e não-incluídos</h3>

			<p>
				<label for="incluso">Incluso*</label><br>
				<textarea name="incluso" cols="35" rows="10" placeholder="Insira um item por linha. Não use nenhum caracter especial (*/&...)!"></textarea>
			</p>


			<p>
				<label for="nao_incluso">Não-incluso*</label><br>
				<textarea name="nao_incluso" cols="35" rows="10"placeholder="Insira um item por linha. Não use nenhum caracter especial (*/&...)!" ></textarea>
			</p>

			<h3>Informações sobre preços</h3>

			<p>
				<label for="numero_parcelas">Número de parcelas do parcelamento</label>
				<input type="text" name="numero_parcelas" id="numero_parcelas" >
			</p>

					


			<h4>Modalidade de Preço 1</h4>

			<p>
				<label for="valor_descricao_">Descrição</label>
				<input type="text"   name="valor_descricao_1" >
			</p>


			<p>
				<label for="valor_vista_1">Valor à vista</label>
				<input type="text" class="dinheiro"  name="valor_vista_1" >
			</p>

			<p>
				<label for="valor_parcela_1">Valor parcela</label>
				<input type="text" name="valor_parcela_1" class="dinheiro" >
			</p>

			
			<p>
				<label for="valor_entrada_1">Valor da entrada</label>
				<input type="text" class="dinheiro" name="valor_entrada_1" >
			</p>

			<h4>Modalidade de Preço 2</h4>	
		

			<p>
				<label for="valor_descricao_2">Descrição</label>
				<input type="text" name="valor_descricao_2" >
			</p>


			<p>
				<label for="valor_vista_2">Valor à vista</label>
				<input type="text" class="dinheiro" name="valor_vista_2" >
			</p>

			<p>
				<label for="valor_parcela_2">Valor parcela</label>
				<input type="text" class="dinheiro" name="valor_parcela_2" >
			</p>

			
			<p>
				<label for="valor_entrada_2">Valor da entrada</label>
				<input type="text" class="dinheiro" name="valor_entrada_2" >
			</p>

			
			<h4>Modalidade de Preço 3</h4>

			<p>
				<label for="valor_descricao_3">Descrição</label>
				<input type="text" name="valor_descricao_3" >
			</p>


			<p>
				<label for="valor_vista_3">Valor à vista</label>
				<input type="text" class="dinheiro" name="valor_vista_3" >
			</p>
 
			<p>
				<label for="valor_parcela_3">Valor parcela</label>
				<input type="text" class="dinheiro" name="valor_parcela_3" >
			</p>

			
			<p>
				<label for="valor_entrada_3">Valor da entrada</label>
				<input type="text" class="dinheiro" name="valor_entrada_3" >
			</p>

			<h4>Modalidade de Preço 4</h4>
			<p>
				<label for="valor_descricao_4">Descrição</label>
				<input type="text" name="valor_descricao_4" >
			</p>


			<p>
				<label for="valor_vista_4">Valor à vista</label>
				<input type="text" class="dinheiro" name="valor_vista_4" >
			</p>

			<p>
				<label for="valor_parcela_4">Valor parcela</label>
				<input type="text" class="dinheiro" name="valor_parcela_4" >
			</p>

			
			<p>
				<label for="valor_entrada_4">Valor da entrada</label>
				<input type="text" class="dinheiro" name="valor_entrada_4" >
			</p>

			<h4>Modalidade de Preço 5</h4>
			<p>
				<label for="valor_descricao_5">Descrição</label>
				<input type="text" name="valor_descricao_5" >
			</p>


			<p>
				<label for="valor_vista_5">Valor à vista</label>
				<input type="text" class="dinheiro" name="valor_vista_5" >
			</p>

			<p>
				<label for="valor_parcela_5">Valor parcela</label>
				<input type="text" class="dinheiro" name="valor_parcela_5" >
			</p>

			
			<p>
				<label for="valor_entrada_5">Valor da entrada</label>
				<input type="text" class="dinheiro" name="valor_entrada_5" >
			</p>


			<h4>Modalidade de Preço 6</h4>

			<p>
				<label for="valor_descricao_6">Descrição</label>
				<input type="text" name="valor_descricao_6" >
			</p>


			<p>
				<label for="valor_vista_6">Valor à vista</label>
				<input type="text" class="dinheiro" name="valor_vista_6" >
			</p>

			<p>
				<label for="valor_parcela_6">Valor parcela</label>
				<input type="text" class="dinheiro" name="valor_parcela_6" >
			</p>

			
			<p>
				<label for="valor_entrada_6">Valor da entrada</label>
				<input type="text" class="dinheiro" name="valor_entrada_6" >
			</p><br>
	

			<h3>Informações Gerais</h3>

			<p>
				<label for="avisos_importantes">Avisos importantes</label><br>
				<textarea name="avisos_importantes" cols="35" rows="10" ></textarea>
			</p><br>

			<h3>Sobre a saída</h3>

			<p>
				<label for="data_partida">Data da partida</label>
				<input type="text" class="datapicker" name="data_partida">
			</p>

			<h4>Partida 1</h4>

			<p>
				<label for="partida_local_1">Local de partida 1</label>
				<input type="text" name="partida_local_1" >
			</p>


			

			<p>
				<label for="partida_horario_1">Hora da partida 1</label>
				<input type="text" class="horario" name="partida_horario_1" >
			</p>

			<h4>Partida 2</h4>

			<p>
				<label for="partida_local_2">Local de partida 2</label>
				<input type="text" name="partida_local_2">
			</p>


			<p>
				<label for="partida_horario_2">Hora da partida 2</label>
				<input type="text" class="horario" name="partida_horario_2">
			</p>

			<h4>Partida 3</h4>			

			<p>
				<label for="partida_local_3">Local de partida 3</label>
				<input type="text" name="partida_local_3">
			</p>

			<p>
				<label for="partida_horario_3">Hora da partida 3</label>
				<input type="text" class="horario" name="partida_horario_3">
			</p>

			<h4>Partida 4</h4>

			<p>
				<label for="partida_local_4">Local de partida 4</label>
				<input type="text" name="partida_local_4">
			</p>

			<p>
				<label for="partida_horario_4">Hora da partida 4</label>
				<input type="text" class="horario" name="partida_horario_4">
			</p>
			
			<h4>Partida 5</h4>

			<p>
				<label for="partida_local_5">Local de partida 5</label>
				<input type="text" name="partida_local_5">
			</p>

			<p>
				<label for="partida_horario_5">Hora da partida 5</label>
				<input type="text" class="horario" name="partida_horario_5">
			</p>

			<h4>Partida 6</h4>

			<p>
				<label for="partida_local_6">Local de partida 6</label>
				<input type="text" name="partida_local_6" >
			</p>

			<p> 
				<label for="partida_horario_6">Hora da partida 6</label>
				<input type="text" class="horario" name="partida_horario_6">
			</p><br>


							
				
			<p>
				<input name="upload" type="submit" value="Inserir Passeio">
			</p>
		</fieldset>
		</form>	
		



</body>
</html>
