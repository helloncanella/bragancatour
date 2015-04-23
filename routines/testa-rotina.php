<?php



/*********************************************************************
*************************** Troca de formato de data *****************
**********************************************************************/

$data="23/15/1515";

/*Verficando campos $SESSION[$key] que correspodem à] data com formato dd/mm/YYYY*/
if(preg_match("/(?:\d+\/){2}\d{4}/", $data)){

	$string=$data;
	
	$padrao='/(\d{2})\/(\d{2})\/(\d{4})/';

	$substituicao ='\3-\2-\1';

}

/**
 * Teste 'proximo-passeio.php'
 */
include 'proximo-passeio.php'; 

$teste = proximo_passeio(50);

foreach ($teste as $value) {
	print_r($value);
	echo '<br><br>';
}

$a="ab              cd"."...";

for($b=0;$b<=350;$b++)
{echo $a[$b];}

?>





