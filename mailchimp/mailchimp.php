<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <?php 
      	/**
      	 * ÍNDICE
      	 *
      	 * 0) Incluindo todas as rotinas já escritas para o projeto da bragancatour
      	 * 1) Estabelecimento de conexão com o banco de dados e extrair passeio com id lido do browser
      	 * 2) Coleta de informações relevantes sobre o passeio 
      	 */
      
      
      //0) Incluindo todas as rotinas já escritas para o projeto da bragancatour
      	
      	include 'biblioteca-rotinas.php';
      
      //1)Estabelecer conexão com o banco de dados e extrair passeio com id lido do browser 
      
      	/*Configurar e abrir banco de dados*/
      	include '../routines/dataBaseLibrary/config.php';
      
      	include '../routines/dataBaseLibrary/opendb.php';
      
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
      	$pasta = $passeio['pasta_recurso']; 
      ?>		
    <title>Mailchimp</title>
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>

    <style type="text/css">

      /*$rodape: hsl(200, 97%, 45%);
      $h1: hsl(36, 100%, 50%);
      $menu: hsl(187, 100%, 42%);
      $h3: hsl(206, 99%, 31%);*/ 

      body,ul{
        margin:0;
        font-size:13px; 
      }

      a{
        text-decoration: none;
        color: inherit;
      }
      
      ul{
        padding:0;
      }

      .container{
        width:90vw;
        margin: 0 auto;
      }
      
      h1 {
          color: hsl(36, 100%, 50%);
          font-size: 2.62em;
          line-height: 1.62em;
          margin: 0;
          font-family: raleway, verdana, arial;
          @media screen and (max-width:264px){
              font-size:3.0em;
          }
      }

      h2 {
          font-size: 2.23em;
          line-height: 1.62em;
          margin: 0px 0px .382em 0px;
          font-family: raleway, verdana, arial;
          font-weight: 400;
          font-style: normal;
      }

      h3 {
          color:hsl(206, 99%, 31%);
          font-size: 1em;
          line-height: 1.618em;
          margin: 0px 0px .382em 0px;
          font-family: raleway, verdana, arial;
          font-weight: 700;
          font-style: normal;
      }

      h4 {
          line-height: 1.612em;
          margin: 0px 0px .382em 0px;
          font-family: raleway, verdana, arial;
          font-weight: 600;
          font-style: normal;
      }

      p{
          font-size: 1em;
          line-height: 1.62em;
          margin: 0px 0px 1.62em 0px;
          font-family: raleway, verdana, arial;
          font-weight: 400;
          font-style: normal;

          @media screen and (max-width:350px){
              font-size:1em;
          }
       }

      
      .lead{
        font-size:1.62em;
        line-height: 1.612em;
        margin: 0px 0px  0.618em 0px;
      }  


      header{
        background: hsl(187, 100%, 42%);
        display:flex;
        width: 100%;
        align-items:center;
        justify-content: center;
      }

      header .container{
        display: flex;
        align-items:center;
        justify-content: space-between;
      }

      header #logo img{
        width: 28vw;
      }

      header .facebook{
        width: 4vw;
      }

      main{
        display: flex;
        flex-direction: column;
        align-content: space-between;
        margin-top: 1.618em !important;
      }
      
      main img#principal{
        max-width: 100%;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 1em; 
      }

      main a#button{
        display:flex;
      }

      main button{
        margin-left:auto;
        background: #4CAF50;
        border: none;
        padding: 1.618%;
        font-size: 1.618em;
        border-radius: 5.23px;
        color: white;
        font-family: raleway, verdana, arial;
        font-weight: 400;
        display: flex;
      }  
      
      footer{
        display:flex;
        flex-direction:column;
      }

      footer img#skyline{
        margin:0 auto;
        width: 83.33333vw;
        position: relative;
        top: 0.4em;
        z-index: -1;
        margin-top: 4.23em;
      }

      footer #contato{
        background: #0398E2;
      }      

      footer ul{
        list-style-type: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding:2.5% 0;
        color: white;
      } 

      footer li{
        font-size: 1em;
        font-family: raleway, verdana, arial;
        line-height: 1.62em;
        margin: 0px 0px .382em 0px;
        /* font-variant: small-caps; */
      }

      footer li:last-child{
        margin-bottom: 0;
      }
      
    </style>
  </head>
  <body>


    <header>
      <div class='container'>
        <div id="logo"><a href="http://bragancatour.com"><img src="../explorer/files/images/logo.png"></a></div>
        <div class="facebook"><a href="http://goo.gl/mvbhrM"><img src="../explorer/files/images/facebook.svg?version=1"></a></div>
      </div>
    </header>
    <main class='container'>
      <h1><?php echo $nome;?></h1>
      <p class="lead"><?php echo imprime_inicio_fim_passeio($inicio,$fim); ?></p>
      <img id='principal' src="../explorer/files/images/<?php echo $pasta;?>/principal.jpg">
      <p> <?php echo $por_que_ir; ?></p>
      <p style="font-weight:500">a partir de <?php echo menor_preco($passeio);?></p>
      <button>
        <a id='button' href="http://www.bragancatour.com/passeio.php?id=<?php echo $id; ?>">
          Detalhes
        </a>
      </button>
    </main>
    <footer>
      <img id='skyline' src="../explorer/files/images/skylinefinal.png">
      <div id="contato" >
        <ul class='container'>
          <li id="telefone">(21) 3867-9034</li>
          <li id="e-mail">bragancatour@gmail.com</li>
          <li class="facebook"> <a href="http://goo.gl/mvbhrM">Siga-nos no facebook 	</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>