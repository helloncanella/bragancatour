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
      	$introducao = $passeio['introducao'];
      	$por_que_ir = $passeio['por_que_ir'];
      	$incluso = $passeio['incluso'];
      	$nao_incluso = $passeio['nao_incluso'];
      	$numero_parcelas = $passeio['numero_parcelas'];
      	$precos = $passeio[''];
      	$partida = $passeio[''];
      	$informacoes_importantes = $passeio['avisos_importantes'];
      	$pasta = $passeio['pasta_recurso']; 
      ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<!-- NAME: 1 COLUMN -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>*|MC:SUBJECT|*</title>
        
    <style type="text/css">
		body,#bodyTable,#bodyCell{
			height:100% !important;
			margin:0;
			padding:0;
			width:100% !important;
		}
		table{
			border-collapse:collapse;
		}
		img,a img{
			border:0;
			outline:none;
			text-decoration:none;
		}
		h1,h2,h3,h4,h5,h6{
			margin:0;
			padding:0;
		}
		p{
			margin:1em 0;
			padding:0;
		}
		a{
			word-wrap:break-word;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
			line-height:100%;
		}
		table,td{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		body,table,td,p,a,li,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		#bodyCell{
			padding:20px;
		}
		.mcnImage{
			vertical-align:bottom;
		}
		.mcnTextContent img{
			height:auto !important;
		}
	/*
	@tab Page
	@section background style
	@tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
	*/
		body,#bodyTable{
			/*@editable*/background-color:#F2F2F2;
		}
	/*
	@tab Page
	@section background style
	@tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
	*/
		#bodyCell{
			/*@editable*/border-top:0;
		}
	/*
	@tab Page
	@section email border
	@tip Set the border for your email.
	*/
		#templateContainer{
			/*@editable*/border:0;
		}
	/*
	@tab Page
	@section heading 1
	@tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
	@style heading 1
	*/
		h1{
			/*@editable*/color:#606060 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:40px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:-1px;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section heading 2
	@tip Set the styling for all second-level headings in your emails.
	@style heading 2
	*/
		h2{
			/*@editable*/color:#404040 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:26px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:-.75px;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section heading 3
	@tip Set the styling for all third-level headings in your emails.
	@style heading 3
	*/
		h3{
			/*@editable*/color:#606060 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:18px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:-.5px;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section heading 4
	@tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
	@style heading 4
	*/
		h4{
			/*@editable*/color:#808080 !important;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:16px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:normal;
			margin:0;
			/*@editable*/text-align:left;
		}
	/*
	@tab Preheader
	@section preheader style
	@tip Set the background color and borders for your email's preheader area.
	*/
		#templatePreheader{
			/*@editable*/background-color:#FFFFFF;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Preheader
	@section preheader text
	@tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
	*/
		.preheaderContainer .mcnTextContent,.preheaderContainer .mcnTextContent p{
			/*@editable*/color:#606060;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:11px;
			/*@editable*/line-height:125%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Preheader
	@section preheader link
	@tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
	*/
		.preheaderContainer .mcnTextContent a{
			/*@editable*/color:#606060;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Header
	@section header style
	@tip Set the background color and borders for your email's header area.
	*/
		#templateHeader{
			/*@editable*/background-color:#ffffff;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Header
	@section header text
	@tip Set the styling for your email's header text. Choose a size and color that is easy to read.
	*/
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			/*@editable*/color:#000000;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:15px;
			/*@editable*/line-height:200%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section header link
	@tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
	*/
		.headerContainer .mcnTextContent a{
			/*@editable*/color:#2293af;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Body
	@section body style
	@tip Set the background color and borders for your email's body area.
	*/
		#templateBody{
			/*@editable*/background-color:#FFFFFF;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Body
	@section body text
	@tip Set the styling for your email's body text. Choose a size and color that is easy to read.
	*/
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			/*@editable*/color:#606060;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:15px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Body
	@section body link
	@tip Set the styling for your email's body links. Choose a color that helps them stand out from your text.
	*/
		.bodyContainer .mcnTextContent a{
			/*@editable*/color:#6DC6DD;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Footer
	@section footer style
	@tip Set the background color and borders for your email's footer area.
	*/
		#templateFooter{
			/*@editable*/background-color:#FFFFFF;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Footer
	@section footer text
	@tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
	*/
		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			/*@editable*/color:#606060;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:11px;
			/*@editable*/line-height:125%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Footer
	@section footer link
	@tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
	*/
		.footerContainer .mcnTextContent a{
			/*@editable*/color:#606060;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[id=bodyCell]{
			padding:10px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnBoxedTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcpreview-image-uploader]{
			width:100% !important;
			display:none !important;
		}

}	@media only screen and (max-width: 480px){
		img[class=mcnImage]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnImageGroupContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageGroupContent]{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageGroupBlockInner]{
			padding-bottom:0 !important;
			padding-top:0 !important;
		}

}	@media only screen and (max-width: 480px){
		tbody[class=mcnImageGroupBlockOuter]{
			padding-bottom:9px !important;
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionTopContent],table[class=mcnCaptionBottomContent]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionLeftTextContentContainer],table[class=mcnCaptionRightTextContentContainer],table[class=mcnCaptionLeftImageContentContainer],table[class=mcnCaptionRightImageContentContainer],table[class=mcnImageCardLeftTextContentContainer],table[class=mcnImageCardRightTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent],table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent]{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnBoxedTextContentColumn]{
			padding-left:18px !important;
			padding-right:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnTextContent]{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section template width
	@tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.
	*/
		table[id=templateContainer],table[id=templatePreheader],table[id=templateHeader],table[id=templateBody],table[id=templateFooter]{
			/*@tab Mobile Styles
@section template width
@tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.*/max-width:600px !important;
			/*@editable*/width:100% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 1
	@tip Make the first-level headings larger in size for better readability on small screens.
	*/
		h1{
			/*@editable*/font-size:24px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 2
	@tip Make the second-level headings larger in size for better readability on small screens.
	*/
		h2{
			/*@editable*/font-size:20px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 3
	@tip Make the third-level headings larger in size for better readability on small screens.
	*/
		h3{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section heading 4
	@tip Make the fourth-level headings larger in size for better readability on small screens.
	*/
		h4{
			/*@editable*/font-size:16px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Boxed Text
	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent],td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Preheader Visibility
	@tip Set the visibility of the email's preheader on small screens. You can hide it to save space.
	*/
		table[id=templatePreheader]{
			/*@editable*/display:block !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Preheader Text
	@tip Make the preheader text larger in size for better readability on small screens.
	*/
		td[class=preheaderContainer] td[class=mcnTextContent],td[class=preheaderContainer] td[class=mcnTextContent] p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Header Text
	@tip Make the header text larger in size for better readability on small screens.
	*/
		td[class=headerContainer] td[class=mcnTextContent],td[class=headerContainer] td[class=mcnTextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Body Text
	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		td[class=bodyContainer] td[class=mcnTextContent],td[class=bodyContainer] td[class=mcnTextContent] p{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section footer text
	@tip Make the body content text larger in size for better readability on small screens.
	*/
		td[class=footerContainer] td[class=mcnTextContent],td[class=footerContainer] td[class=mcnTextContent] p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=footerContainer] a[class=utilityLink]{
			display:block !important;
		}

}</style></head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <!-- BEGIN PREHEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templatePreheader">
                                        <tr>
                                        	<td valign="top" class="preheaderContainer" style="padding-top:9px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner">
                
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="282" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:9px; padding-left:18px; padding-bottom:9px; padding-right:0;">
                        
                            
                        </td>
                    </tr>
                </tbody></table>
                
                <table align="right" border="0" cellpadding="0" cellspacing="0" width="282" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:9px; padding-right:18px; padding-bottom:9px; padding-left:0;">
                        
                            <a href="*|ARCHIVE|*" target="_blank">Veja o conteúdo desse e-mail em uma outra janela</a>
                        </td>
                    </tr>
                </tbody></table>
                
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding-top:9px; padding-right:0px; padding-left:0px; padding-bottom:9px;" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 0px; padding-left: 0; padding-top: 9px; padding-bottom: 0;">
                                
                                    	

                                        <img align="left" alt="" src="https://gallery.mailchimp.com/27b8d7ac368597aefd481fc98/images/2dd36848-72c9-46cc-8336-1b2f42434e24.png" width="100%" style="max-width:1000px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END PREHEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner">
                
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top: 42.5px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                        
                            <h1 style="margin-top:0.618em;font-size: 2.62em; line-height: 1em; text-align: left;"><span style="color:#FF9900"><span style="font-family:verdana,geneva,sans-serif"><?php echo $nome; ?></span></span></h1>

<p style="font-size: 1.618em; line-height: 0.618em; text-align: left;"><span style="font-family:verdana,geneva,sans-serif; color:#80808F;"><?php echo imprime_inicio_fim_passeio($inicio,$fim); ?></span></p>

                        </td>
                    </tr>
                </tbody></table>
                
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0;">
                                
                                    
                                        <img align="left" alt="" src="https://www.bragancatour.com/images/<?php echo $pasta?>/principal.jpg" width="564" style="max-width:1000px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="padding: 9px 18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 1px;border-top-style: none;border-top-color: #999999;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner">
                
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                        
                            <div style="text-align: center;"><strong><span style="color:#01599D; font-size:2em">Vai perder?</span></strong></div>

<p style="font-size: 1em; line-height: 1.618em; text-align: left;"><?php echo $introducao; ?></p>
<p style='font-size:0.85em'> <strong>A partir de R$ <?php echo menor_preco($passeio) ?></strong></p>
                        </td>
                    </tr>
                </tbody></table>
                
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="right" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 5px;background-color: #4CAF50;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Verdana, Geneva, sans-serif; font-size: 16px; padding: 16px;">
                                <a class="mcnButton " title="Mais Detalhes" href="http://www.bragancatour.com/passeio.php?id=<?php echo $id; ?>" target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Mais Detalhes</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnShareBlock">
    <tbody class="mcnShareBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnShareBlockInner">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnShareContentContainer">
    <tbody><tr>
        <td align="center" style="padding-top:0; padding-left:9px; padding-bottom:0; padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnShareContent" style="border: 1px solid #EEEEEE;background-color: #FAFAFA;">
                <tbody><tr>
                    <td align="center" valign="top" class="mcnShareContentItemContainer" style="padding-top:9px; padding-right:9px; padding-left:9px;">
						<table border="0" cellpadding="0" cellspacing="0">
							<tbody><tr>
								<td align="left" valign="top">
			                        
			                            <table align="left" border="0" cellpadding="0" cellspacing="0">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right:9px; padding-bottom:9px;" class="mcnShareContentItemContainer">
			                                        <table border="0" cellpadding="0" cellspacing="0" width="" class="mcnShareContentItem" style="border-collapse: separate;border: 1px solid #CCCCCC;border-radius: 5px;background-color: #FAFAFA;">
			                                            <tbody><tr>
			                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:9px; padding-bottom:5px; padding-left:9px;">
			                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
			                                                        <tbody><tr>
			                                                            <td align="center" valign="middle" width="24" class="mcnShareIconContent">
			                                                                <a href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbragancatour.com%2Fpasseio.php%3Fid%3D<?php echo $id?>" target="_blank"><img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
			                                                            </td>
			                                                            <td align="left" valign="middle" class="mcnShareTextContent" style="padding-left:5px;">
			                                                                <a href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbragancatour.com%2Fpasseio.php%3Fid%3D<?php echo $id?>" target="" style="color: #505050;font-family: Verdana, Geneva, sans-serif;font-size: 16px;font-weight: normal;line-height: 100%;text-align: center;text-decoration: none;">Compartilhar</a>
			                                                            </td>
			                                                        </tr>
			                                                    </tbody></table>
			                                                </td>
			                                            </tr>
			                                        </tbody></table>
			                                    </td>
			                                </tr>
			                            </tbody></table>
								<!--[if gte mso 6]>
								</td>
						    	<td align="left" valign="top">
								<![endif]-->
			                        
			                            <table align="left" border="0" cellpadding="0" cellspacing="0">
			                                <tbody><tr>
			                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnShareContentItemContainer">
			                                        <table border="0" cellpadding="0" cellspacing="0" width="" class="mcnShareContentItem" style="border-collapse: separate;border: 1px solid #CCCCCC;border-radius: 5px;background-color: #FAFAFA;">
			                                            <tbody><tr>
			                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:9px; padding-bottom:5px; padding-left:9px;">
			                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
			                                                        <tbody><tr>
			                                                            <td align="center" valign="middle" width="24" class="mcnShareIconContent">
			                                                                <a href="*|FORWARD|*" target="_blank"><img src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-forwardtofriend-48.png" style="display:block;" height="24" width="24" class=""></a>
			                                                            </td>
			                                                            <td align="left" valign="middle" class="mcnShareTextContent" style="padding-left:5px;">
			                                                                <a href="*|FORWARD|*" target="" style="color: #505050;font-family: Verdana, Geneva, sans-serif;font-size: 16px;font-weight: normal;line-height: 100%;text-align: center;text-decoration: none;">Enviar p/ um amigo</a>
			                                                            </td>
			                                                        </tr>
			                                                    </tbody></table>
			                                                </td>
			                                            </tr>
			                                        </tbody></table>
			                                    </td>
			                                </tr>
			                            </tbody></table>
								<!--[if gte mso 6]>
								</td>
						    	<td align="left" valign="top">
								<![endif]-->
			                        
								</td>
							</tr>
						</tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

                </td>
            </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner">
                
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                        
                            <div style="text-align: center; background: #0398E2; color:white; padding:1.682em"><em style="line-height:20.8000011444092px">Direitos Autorais © *|CURRENT_YEAR|* *|LIST:COMPANY|*<br>
Todos os direitos Reservados</em><br style="line-height: 20.8000011444092px;">
<br>
<span style="line-height:20.8000011444092px">*|IFNOT:ARCHIVE_PAGE|* *|LIST:DESCRIPTION|* *|END:IF|*</span><br style="line-height: 20.8000011444092px;">
<br style="line-height: 20.8000011444092px;">
<a class="utilityLink" href="*|UNSUB|*" style="line-height: 20.8000011444092px;" target="_blank" title="fsadfasdf">Deixar de receber nossas promoções</a><span style="line-height:20.8000011444092px">&nbsp; &nbsp;&nbsp;</span><a class="utilityLink" href="*|UPDATE_PROFILE|*" style="line-height: 20.8000011444092px;" target="_blank" title="dfasdfasdafsd">Atualizar dados cadastrais</a><span style="line-height:20.8000011444092px">&nbsp;</span><br style="line-height: 20.8000011444092px;">
<br style="line-height: 20.8000011444092px;">
<span style="line-height:20.8000011444092px">*|IF:REWARDS|* *|HTML:REWARDS|* *|END:IF|*</span></div>

                        </td>
                    </tr>
                </tbody></table>
                
            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- BEGIN FOOTER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContainer" style="padding-bottom:9px;"></td>
                                        </tr>
                                    </table>
                                    <!-- // END FOOTER -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
