<?php 


function numero_dias_noites($inicio, $fim){

	$inicio = strtotime($inicio);
	$fim = strtotime($fim);

	$segundos_um_dia = 24*60*60;

	$numero_dias = round((($fim-$inicio)/$segundos_um_dia)+1);
	$numero_noites = round($numero_dias-1);

	/*Verificando o número de noites. Isso é importante para avaliarmos se deve-se imprimir 'noite' no singular, ou 'noites' no plural*/
	if($numero_noites==1){
		$numero_noites = $numero_noites.' noite '; 
	}
	else{
		$numero_noites = $numero_noites.' noites';
	}

	return $numero_dias.' dias e '.$numero_noites;

}

function numero_dias($inicio, $fim){

	$inicio = strtotime($inicio);
	$fim = strtotime($fim);

	$segundos_um_dia = 24*60*60;

	$numero_dias = round((($fim-$inicio)/$segundos_um_dia)+1);


	return $numero_dias;

}

function numero_noites($inicio, $fim){

	$inicio = strtotime($inicio);
	$fim = strtotime($fim);

	$segundos_um_dia = 24*60*60;

	$numero_dias = round((($fim-$inicio)/$segundos_um_dia)+1);

	$numero_noites = round($numero_dias);

	return $numero_noites;

}

?>

