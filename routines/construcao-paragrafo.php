<?php 

//TESTE
/*$string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores dolor, tempora similique aut id nihil nesciunt! Est ratione veniam expedita nobis facilis! Exercitationem alias, vel voluptas nulla dicta amet obcaecati culpa. Consequuntur, consequatur nesciunt at consectetur deleniti quis enim quos quasi optio sunt, quia dolores doloremque dolor maiores, aut nisi.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex repudiandae harum a impedit inventore unde? Ab praesentium ad voluptatem hic corporis natus in itaque, recusandae, fugiat dignissimos minima dolor suscipit officiis minus asperiores perferendis tenetur. Repudiandae quo accusamus fugit nam soluta magnam iste reprehenderit tempora neque qui, animi ea quae repellat pariatur, voluptatem nemo libero. Labore vitae laboriosam ab aut minima odio, quae blanditiis? Dolorem, doloremque, impedit. Placeat recusandae quae autem voluptas consectetur culpa quas totam non ut tempore alias provident optio, aliquid dolore rem, voluptate. Amet repellat fugiat maxime nostrum cumque, quis provident. Corporis magnam, voluptatem veniam consequuntur.';	

echo construcao_paragrafo($string);*/


//ROTINA contrucao-paragrafo.php


	//OBJETIVO: a finalidade da rotina é receber um uma string e transformá-las em paragrafos, a partir da identificação de quebras de linha


	//PASSOS

		/*receber $string a ser 'pagrafizada' como argumento*/
		function construcao_paragrafo($string){

			/*identificar padrão 'inicio de linha' e substituí-la por <p> (íncio de parágrafo em HTML)*/
			$string = preg_replace('/(^.)/', '<p>\1', $string);

			/*identificando quebra de linha que não incluam final de string*/
			$string = preg_replace('/\s(\r\n[^$])/', '</p><p>\1', $string);

			/*identificar padrão 'fim de linha' e substituí-la por por </p> (íncio de parágrafo em HTML)*/
			$string =preg_replace('/(.)$/', '\1</p>', $string);

			/*retornar $string*/
			return $string;	
		}


?>