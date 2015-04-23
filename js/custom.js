//TÍTULO: custom.js 
//DESCRIÇÃO: todos os scripts criados por pelo desenvolvedor

	

	$(document).ready(function() {
		
		//Mmenu - plugin
		
			/*Mmenu - header*/	
			$("#menu").mmenu({
				"classes": "mm-white",
	           "slidingSubmenus": false,	
	           "counters": true,
	           "footer": {
	              "add": true,
	              "title": "Bragança Tour. Todos os direitos reservados"
	           },
	           
	           "searchfield": {
	              "placeholder": "Busque aqui ",

	              //Apresentando formulário 'fale conosco' para caso o usuário não consiga achar o que precisa
	              "noResults": " <h3>Não achou?</h3> <p class=lead><b>Mande-nos uma mensagem!</b></p><p></p><form class='col-xs-10 col-xs-offset-1' action=''><!--Nome--><div class='form-group'><!--  <label for='name'>Seu nome</label> --><input type='text' class='form-control' placeholder='Seu nome' required/></div><!--Nome--><div class='form-group'><!-- <label for='email'>Seu e-mail</label> --><input type='email' id='email' class='form-control' placeholder='E-mail (opcional)' required =''/></div><!--Nome--><div class='form-group'><!-- <label for='telefone'>Seu telefone</label> --><input type='text' class='form-control' placeholder='Telefone' required/></div><!--Nome--><div class='form-group'><!--  <label for='mensagem'>Mensagem</label> --><textarea name='mensagem' placeholder='Sua mensagem' id='mensagem' class='form-control' rows='5' required ></textarea></div><button type='submit' name='enviar' class='pull-right btn btn-default'>Enviar</button></form>",      
	              "add": true,
	              "search": true
	          },



	          offCanvas: {
					/*position:right - serve para posicionar o plugin à direita */
					position  : "top",
					zposition : "front"
				}	

			});

			/*Mmenu - Fale Conosco*/	
			$("#fale-conosco").mmenu({
				"classes": "mm-white",
	           "slidingSubmenus": false,	
	           "counters": true,
	           "footer": {
	              "add": true,
	              "title": "Bragança Tour. Todos os direitos reservados"
	           },
	           
	           "searchfield": {
	              "placeholder": "Busque aqui ",

	              //Apresentando formulário 'fale conosco' para caso o usuário não consiga achar o que precisa
	              "noResults": " <h3>Não achou?</h3> <p class=lead><b>Mande-nos uma mensagem!</b></p><p></p><form class='col-xs-10 col-xs-offset-1' action=''><!--Nome--><div class='form-group'><!--  <label for='name'>Seu nome</label> --><input type='text' class='form-control' placeholder='Seu nome' required/></div><!--Nome--><div class='form-group'><!-- <label for='email'>Seu e-mail</label> --><input type='email' id='email' class='form-control' placeholder='E-mail (opcional)' required =''/></div><!--Nome--><div class='form-group'><!-- <label for='telefone'>Seu telefone</label> --><input type='text' class='form-control' placeholder='Telefone' required/></div><!--Nome--><div class='form-group'><!--  <label for='mensagem'>Mensagem</label> --><textarea name='mensagem' placeholder='Sua mensagem' id='mensagem' class='form-control' rows='5' required ></textarea></div><button type='submit' name='enviar' class='pull-right btn btn-default'>Enviar</button></form>",      
	              "add": false,
	              "search": true
	          },



	          offCanvas: {
					/*position:right - serve para posicionar o plugin à direita */
					position  : "right",
					zposition : "next"
				}	

			});

			
			/*Mmenu - Fale Conosco*/	
			$("#proximos-encontros,#quem-somos").mmenu({
				"classes": "mm-white",
	           "slidingSubmenus": false,	
	           "counters": true,
	           "footer": {
	              "add": true,
	              "title": "Bragança Tour. Todos os direitos reservados"
	           },
	           
	           "searchfield": {
	              "placeholder": "Busque aqui ",

	              //Apresentando formulário 'fale conosco' para caso o usuário não consiga achar o que precisa
	              "noResults": " <h3>Não achou?</h3> <h2 class='col-xs-10 col-xs-offset-1'><b>Mande-nos uma mensagem!</h2></p><p></p><form class='col-xs-10 col-xs-offset-1' action=''><!--Nome--><div class='form-group'><!--  <label for='name'>Seu nome</label> --><input type='text' class='form-control' placeholder='Seu nome' required/></div><!--Nome--><div class='form-group'><!-- <label for='email'>Seu e-mail</label> --><input type='email' id='email' class='form-control' placeholder='E-mail (opcional)' required =''/></div><!--Nome--><div class='form-group'><!-- <label for='telefone'>Seu telefone</label> --><input type='text' class='form-control' placeholder='Telefone' required/></div><!--Nome--><div class='form-group'><!--  <label for='mensagem'>Mensagem</label> --><textarea name='mensagem' placeholder='Sua mensagem' id='mensagem' class='form-control' rows='5' required ></textarea></div><button type='submit' name='enviar' class='pull-right btn btn-default'>Enviar</button></form>",      
	              "add": false,
	              "search": true
	          },



	          offCanvas: {
					/*position:right - serve para posicionar o plugin à direita */
					position  : "right",
					zposition : "next"
				}	

			});


			//Mmenu plugin - Abrindo itens com o resultado da busca
			
				//Quando o campo de busca receber caracteres
				$('.mm-search>input').on('input',function(){
					
					//Selecionar todos os <li>s que não possuam as classes '.mm-hidden.mm-nosubresults' e abri-las
					$('li:not(.mm-hidden.mm-nosubresults)').addClass('mm-opened');	

					/*Se campo de busca estiver vazio deixar aberto só o campo 'Fale conosco'*/	
					if($('.mm-search>input').val()===''){
						
						$('li:not(#fale-conosco-mmenu)').removeClass('mm-opened');
						
					}	


					//Selecionar todos ids filhos de '.mmenu' e que não sejam '#fale-conosco' e fecha-las	
				});
	
			
		//FlowType - plugin
		
			$('body').flowtype({
				minimum   : 200,
				maximum   : 1600,
				minFont   : 12,
				maxFont   : 21,
				fontRatio : 40
			}); 			 



		/*Ajustando a posição do botão 'opção' de acordo com o tamanho da tela*/	
		$(window).resize(function(){ 
			/*var comprimentoMain = $('main').width();

			$('.wrap').css('width',comprimentoMain);
			*/
		});

		
		//Waypoint - plugin
			
			/*Armazenar nome da classe da logo, do */
/*			var wrapClass = $('.wrap').attr('class');
*/
			/*Quando atingir o main*/
			/*$('main').waypoint({
				handler: function(direction){
					if(direction==='down'){
						$('.wrap').attr('class',wrapClass+' fixed');
					
					}
					else{
						$('.wrap').attr('class',wrapClass);
											
					}
				},
				
			});	*/
				






	});